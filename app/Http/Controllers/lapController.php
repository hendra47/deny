<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createnilai_alternatifRequest;
use App\Http\Requests\Updatenilai_alternatifRequest;
use App\Repositories\nilai_alternatifRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class lapController extends AppBaseController
{
    /** @var  nilai_alternatifRepository */
    private $nilaiAlternatifRepository;

    public function __construct(nilai_alternatifRepository $nilaiAlternatifRepo)
    {
        $this->nilaiAlternatifRepository = $nilaiAlternatifRepo;
    }

    /**
     * Display a listing of the nilai_alternatif.
     *
     * @param Request $request
     * @return Response
     */
    public function index($id)
    {
        // dd($id);
        // $this->nilaiAlternatifRepository->pushCriteria(new RequestCriteria($request));
        // $nilaiAlternatifs = $this->nilaiAlternatifRepository->all();
        $alternatifs = DB::table('alternatifs')
            ->select('alternatifs.*','siswas.nama_siswa as nama_siswa')
            ->join('siswas', 'siswas.id', '=', 'alternatifs.id_siswa')
            ->orderBy('alternatifs.id', 'asc')
            ->get();
        $kriterias = DB::table('kriterias')
            ->orderBy('id', 'desc')
            ->get();
        $kriterias2 = DB::table('kriterias')
            ->orderBy('id', 'desc')
            ->get();
        $nilai = DB::table('nilai_alternatifs')
            ->select('nilai_alternatifs.id as id_nilai','nilai_alternatifs.kode as nilai_kode','nilai_alternatifs.*','crips.*')
            ->join('crips', 'crips.id', '=', 'nilai_alternatifs.id_crips')
            ->join('alternatifs', 'alternatifs.id', '=', 'nilai_alternatifs.id_alternatif')          
            ->get();
        
            //   ->toSql();
            //   dd($nilai);
            $C1=array();
            $C2=array();
            $C3=array();
            $C4=array();
        foreach ($nilai as $key => $value) {
            if($value->kriteria=="C1"){
                   array_push($C1,$value->nilai);
            }else if($value->kriteria=="C2"){
                   array_push($C2,$value->nilai);
            }else if($value->kriteria=="C3"){
                   array_push($C3,$value->nilai);
            }else if($value->kriteria=="C4"){
                   array_push($C4,$value->nilai);
            }
        }

        if(count($C1)==0){
            $C1=array(0);
        }

        if(count($C2)==0){
            $C2=array(0);
        }

        if(count($C3)==0){
            $C3=array(0);
        }

        if(count($C4)==0){
            $C4=array(0);
        }

        return view('laporan.index',['alternatifs' => $alternatifs,'kriterias'=>$kriterias,'kriterias2'=>$kriterias2,'nilai'=>$nilai,'C1'=>min($C1),'C2'=>max($C2),'C3'=>max($C3),'C4'=>max($C4),'id'=>$id]);

    }
    public function inputNilai($id,$kode,$kriteria,$kode_kriteria){

         $crips = DB::table('crips')
            ->select('crips.id as id_crips','crips.keterangan as ket','crips.nilai as nilai_crips','crips.*','kriterias.*')
            ->join('kriterias', 'kriterias.id', '=', 'crips.id_kriteria')
            ->where('kriterias.id','=',$id)
            ->get();

        // dd($crips);
        return view('nilai_alternatifs.tambah',['id'=>$id,'kode'=>$kode,'kriteria'=>$kriteria,'crips'=>$crips,'kode_kriteria'=>$kode_kriteria]);
    }

    /**
     * Show the form for creating a new nilai_alternatif.
     *
     * @return Response
     */
    public function create()
    {
        return view('nilai_alternatifs.create');
    }

    /**
     * Store a newly created nilai_alternatif in storage.
     *
     * @param Createnilai_alternatifRequest $request
     *
     * @return Response
     */
    public function store(Createnilai_alternatifRequest $request)
    {
        $input = $request->all();
        
        $nilaiAlternatif = $this->nilaiAlternatifRepository->create($input);

        Flash::success('Nilai Alternatif saved successfully.');

        return redirect(route('nilaiAlternatifs.index'));
    }

    /**
     * Display the specified nilai_alternatif.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nilaiAlternatif = $this->nilaiAlternatifRepository->findWithoutFail($id);

        if (empty($nilaiAlternatif)) {
            Flash::error('Nilai Alternatif not found');

            return redirect(route('nilaiAlternatifs.index'));
        }

        return view('nilai_alternatifs.show')->with('nilaiAlternatif', $nilaiAlternatif);
    }

    /**
     * Show the form for editing the specified nilai_alternatif.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nilaiAlternatif = $this->nilaiAlternatifRepository->findWithoutFail($id);

        if (empty($nilaiAlternatif)) {
            Flash::error('Nilai Alternatif not found');

            return redirect(route('nilaiAlternatifs.index'));
        }

        return view('nilai_alternatifs.edit')->with('nilaiAlternatif', $nilaiAlternatif);
    }

    /**
     * Update the specified nilai_alternatif in storage.
     *
     * @param  int              $id
     * @param Updatenilai_alternatifRequest $request
     *
     * @return Response
     */
    public function update($id, Updatenilai_alternatifRequest $request)
    {
        $nilaiAlternatif = $this->nilaiAlternatifRepository->findWithoutFail($id);

        if (empty($nilaiAlternatif)) {
            Flash::error('Nilai Alternatif not found');

            return redirect(route('nilaiAlternatifs.index'));
        }

        $nilaiAlternatif = $this->nilaiAlternatifRepository->update($request->all(), $id);

        Flash::success('Nilai Alternatif updated successfully.');

        return redirect(route('nilaiAlternatifs.index'));
    }

    /**
     * Remove the specified nilai_alternatif from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nilaiAlternatif = $this->nilaiAlternatifRepository->findWithoutFail($id);

        if (empty($nilaiAlternatif)) {
            Flash::error('Nilai Alternatif not found');

            return redirect(route('nilaiAlternatifs.index'));
        }

        $this->nilaiAlternatifRepository->delete($id);

        Flash::success('Nilai Alternatif deleted successfully.');

        return redirect(route('nilaiAlternatifs.index'));
    }
}
