<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatealternatifRequest;
use App\Http\Requests\UpdatealternatifRequest;
use App\Repositories\alternatifRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class alternatifController extends AppBaseController
{
    /** @var  alternatifRepository */
    private $alternatifRepository;

    public function __construct(alternatifRepository $alternatifRepo)
    {
        $this->alternatifRepository = $alternatifRepo;
    }

    /**
     * Display a listing of the alternatif.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        // $this->alternatifRepository->pushCriteria(new RequestCriteria($request));
        // $alternatifs = $this->alternatifRepository->all();
          $alternatifs = DB::table('alternatifs')
            ->select('alternatifs.*','siswas.nama_siswa as nama_siswa')
            ->join('siswas', 'siswas.id', '=', 'alternatifs.id_siswa')
            ->get();



        return view('alternatifs.index')
            ->with('alternatifs', $alternatifs);
    }

    /**
     * Show the form for creating a new alternatif.
     *
     * @return Response
     */
    public function create()
    {
        $siswas = DB::table('siswas')
        ->get();
        
        return view('alternatifs.create',['siswas' => $siswas]);
    }

    /**
     * Store a newly created alternatif in storage.
     *
     * @param CreatealternatifRequest $request
     *
     * @return Response
     */
    public function store(CreatealternatifRequest $request)
    {
        $input = $request->all();
        // dd($input);
        $alternatif = $this->alternatifRepository->create($input);

        Flash::success('Alternatif saved successfully.');

        return redirect(route('alternatifs.index'));
    }

    /**
     * Display the specified alternatif.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alternatif = $this->alternatifRepository->findWithoutFail($id);

        if (empty($alternatif)) {
            Flash::error('Alternatif not found');

            return redirect(route('alternatifs.index'));
        }

        return view('alternatifs.show')->with('alternatif', $alternatif);
    }

    /**
     * Show the form for editing the specified alternatif.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alternatif = $this->alternatifRepository->findWithoutFail($id);

        if (empty($alternatif)) {
            Flash::error('Alternatif not found');

            return redirect(route('alternatifs.index'));
        }

         $siswas = DB::table('siswas')
        ->get();
        
        return view('alternatifs.edit',['siswas' => $siswas,'alternatif'=>$alternatif]);

    }

    /**
     * Update the specified alternatif in storage.
     *
     * @param  int              $id
     * @param UpdatealternatifRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatealternatifRequest $request)
    {
        $alternatif = $this->alternatifRepository->findWithoutFail($id);

        if (empty($alternatif)) {
            Flash::error('Alternatif not found');

            return redirect(route('alternatifs.index'));
        }

        $alternatif = $this->alternatifRepository->update($request->all(), $id);

        Flash::success('Alternatif updated successfully.');

        return redirect(route('alternatifs.index'));
    }

    /**
     * Remove the specified alternatif from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alternatif = $this->alternatifRepository->findWithoutFail($id);

        if (empty($alternatif)) {
            Flash::error('Alternatif not found');

            return redirect(route('alternatifs.index'));
        }

        $this->alternatifRepository->delete($id);

        Flash::success('Alternatif deleted successfully.');

        return redirect(route('alternatifs.index'));
    }
}
