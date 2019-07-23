<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatehakAksesRequest;
use App\Http\Requests\UpdatehakAksesRequest;
use App\Repositories\hakAksesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\hakAkses;

class hakAksesController extends AppBaseController
{
    /** @var  hakAksesRepository */
    private $hakAksesRepository;

    public function __construct(hakAksesRepository $hakAksesRepo)
    {
        $this->hakAksesRepository = $hakAksesRepo;
    }

    /**
     * Display a listing of the hakAkses.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->hakAksesRepository->pushCriteria(new RequestCriteria($request));
        $hakAkses = $this->hakAksesRepository->all();

        return view('hak_akses.index')
            ->with('hakAkses', $hakAkses);
    }

    /**
     * Show the form for creating a new hakAkses.
     *
     * @return Response
     */
    public function create()
    {
        return view('hak_akses.create');
    }

    /**
     * Store a newly created hakAkses in storage.
     *
     * @param CreatehakAksesRequest $request
     *
     * @return Response
     */
    public function store(CreatehakAksesRequest $request)
    {

        $data=$request->all();
        $data['menu']=implode(",",$request->menu);

        $exist = hakAkses::where('group', '=', $data['group'])->get();
        // dd($exist->isEmpty());
        if(!$exist->isEmpty()){
            Flash::error('Data sudah tersedia');
            return redirect(route('hakAkses.create'));
        }        
        $hakAkses = $this->hakAksesRepository->create($data);
        
        Flash::success('Hak Akses saved successfully.');

        return redirect(route('hakAkses.index'));
    }

    /**
     * Display the specified hakAkses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hakAkses = $this->hakAksesRepository->findWithoutFail($id);

        if (empty($hakAkses)) {
            Flash::error('Hak Akses not found');

            return redirect(route('hakAkses.index'));
        }

        return view('hak_akses.show')->with('hakAkses', $hakAkses);
    }

    /**
     * Show the form for editing the specified hakAkses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hakAkses = $this->hakAksesRepository->findWithoutFail($id);     

        if (empty($hakAkses)) {
            Flash::error('Hak Akses not found');

            return redirect(route('hakAkses.index'));
        }

        return view('hak_akses.edit')->with('hakAkses', $hakAkses);
    }

    /**
     * Update the specified hakAkses in storage.
     *
     * @param  int              $id
     * @param UpdatehakAksesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehakAksesRequest $request)
    {
        $data=$request->all();
        $data['menu']=implode(",",$request->menu);
        // dd($data);
        
        $hakAkses = $this->hakAksesRepository->findWithoutFail($id);

        if (empty($hakAkses)) {
            Flash::error('Hak Akses belum lengkap');

            return redirect(route('hakAkses.index'));
        }
      

        $hakAkses = $this->hakAksesRepository->update($data, $id);

        Flash::success('Hak Akses updated successfully.');

         return redirect(route('hakAkses.index'));
    }

    /**
     * Remove the specified hakAkses from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hakAkses = $this->hakAksesRepository->findWithoutFail($id);

        if (empty($hakAkses)) {
            Flash::error('Hak Akses not found');

            return redirect(route('hakAkses.index'));
        }

        $this->hakAksesRepository->delete($id);

        Flash::success('Hak Akses deleted successfully.');

        return redirect(route('hakAkses.index'));
    }
}
