<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesiswaRequest;
use App\Http\Requests\UpdatesiswaRequest;
use App\Repositories\siswaRepository;
use App\Repositories\jurusanRepository;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class siswaController extends AppBaseController
{
    /** @var  siswaRepository */
    private $siswaRepository;
    private $jurusanRepository;


    public function __construct(siswaRepository $siswaRepo, jurusanRepository $jurusanRepo)
    {
        $this->siswaRepository = $siswaRepo;
        $this->jurusanRepository = $jurusanRepo;

    }

    /**
     * Display a listing of the siswa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->siswaRepository->pushCriteria(new RequestCriteria($request));
        $siswas = $this->siswaRepository->all();

        return view('siswas.index')
            ->with('siswas', $siswas);
    }

    /**
     * Show the form for creating a new siswa.
     *
     * @return Response
     */
    public function create()
    {
        $jurusans = $this->jurusanRepository->all();
        return view('siswas.create')
        ->with('jurusan',$jurusans);
    }

    /**
     * Store a newly created siswa in storage.
     *
     * @param CreatesiswaRequest $request
     *
     * @return Response
     */
    public function store(CreatesiswaRequest $request)
    {
        $input = $request->all();

        $siswa = $this->siswaRepository->create($input);

        Flash::success('Siswa saved successfully.');

        return redirect(route('siswas.index'));
    }

    /**
     * Display the specified siswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $siswa = $this->siswaRepository->findWithoutFail($id);

        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        return view('siswas.show')->with('siswa', $siswa);
    }

    /**
     * Show the form for editing the specified siswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $siswa = $this->siswaRepository->findWithoutFail($id);
        $jurusans = $this->jurusanRepository->all();
        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        return view('siswas.edit')->with('siswa', $siswa)->with('jurusan',$jurusans);
    }

    /**
     * Update the specified siswa in storage.
     *
     * @param  int              $id
     * @param UpdatesiswaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesiswaRequest $request)
    {
        $siswa = $this->siswaRepository->findWithoutFail($id);

        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        $siswa = $this->siswaRepository->update($request->all(), $id);

        Flash::success('Siswa updated successfully.');

        return redirect(route('siswas.index'));
    }

    /**
     * Remove the specified siswa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $siswa = $this->siswaRepository->findWithoutFail($id);

        if (empty($siswa)) {
            Flash::error('Siswa not found');

            return redirect(route('siswas.index'));
        }

        $this->siswaRepository->delete($id);

        Flash::success('Siswa deleted successfully.');

        return redirect(route('siswas.index'));
    }
}
