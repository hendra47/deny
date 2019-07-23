<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecripsRequest;
use App\Http\Requests\UpdatecripsRequest;
use App\Repositories\cripsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;
class cripsController extends AppBaseController
{
    /** @var  cripsRepository */
    private $cripsRepository;

    public function __construct(cripsRepository $cripsRepo)
    {
        $this->cripsRepository = $cripsRepo;
    }

    /**
     * Display a listing of the crips.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $crips = DB::table('crips')
            ->select('crips.id as id_crips','crips.keterangan as ket','crips.nilai as nilai_crips','crips.*','kriterias.*')
            ->join('kriterias', 'kriterias.id', '=', 'crips.id_kriteria')
            ->get();
        $kriterias = DB::table('kriterias') 
            ->get();
        //   dd($crips);
        return view('crips.index',['crips' => $crips,'kriterias' => $kriterias]);
    }

    /**
     * Show the form for creating a new crips.
     *
     * @return Response
     */
    public function create($id)
    {
        $crips = $this->cripsRepository->findWithoutFail($id);
        
        // return view('crips.create');
    }
     public function CreateNew($id)
    {
        $kriterias = DB::table('kriterias') 
        ->where('id','=',$id)
        ->get();
        
        return view('crips.create')->with('kriterias', $kriterias[0]);
    }

    /**
     * Store a newly created crips in storage.
     *
     * @param CreatecripsRequest $request
     *
     * @return Response
     */
    public function store(CreatecripsRequest $request)
    {
        $input = $request->all();
        
        $crips = $this->cripsRepository->create($input);
        // dd($crips);
        Flash::success('Crips saved successfully.');

        return redirect(route('crips.index'));
    }

    /**
     * Display the specified crips.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $crips = $this->cripsRepository->findWithoutFail($id);

        if (empty($crips)) {
            Flash::error('Crips not found');

            return redirect(route('crips.index'));
        }

        return view('crips.show')->with('crips', $crips);
    }

    /**
     * Show the form for editing the specified crips.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        
        $crips = $this->cripsRepository->findWithoutFail($id);

        if (empty($crips)) {
            Flash::error('Crips not found');

            return redirect(route('crips.index'));
        }

        // return view('crips.edit')->with('crips', $crips);
           $kriterias = DB::table('kriterias') 
            ->get();
        //   dd($crips);
        return view('crips.edit',['crips' => $crips,'kriterias' => $kriterias]);
    }

    /**
     * Update the specified crips in storage.
     *
     * @param  int              $id
     * @param UpdatecripsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecripsRequest $request)
    {
        $crips = $this->cripsRepository->findWithoutFail($id);

        if (empty($crips)) {
            Flash::error('Crips not found');

            return redirect(route('crips.index'));
        }

        $crips = $this->cripsRepository->update($request->all(), $id);

        Flash::success('Crips updated successfully.');

        return redirect(route('crips.index'));
    }

    /**
     * Remove the specified crips from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {

        $crips = $this->cripsRepository->findWithoutFail($id);

        if (empty($crips)) {
            Flash::error('Crips not found');

            return redirect(route('crips.index'));
        }

        $this->cripsRepository->delete($id);

        Flash::success('Crips deleted successfully.');

        return redirect(route('crips.index'));
    }
}
