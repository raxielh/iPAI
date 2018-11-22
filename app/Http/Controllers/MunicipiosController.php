<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMunicipiosRequest;
use App\Http\Requests\UpdateMunicipiosRequest;
use App\Repositories\MunicipiosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Departamentos;
use Response;

class MunicipiosController extends AppBaseController
{
    /** @var  MunicipiosRepository */
    private $municipiosRepository;

    public function __construct(MunicipiosRepository $municipiosRepo)
    {
        $this->municipiosRepository = $municipiosRepo;
    }

    /**
     * Display a listing of the Municipios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        /*
        $this->municipiosRepository->pushCriteria(new RequestCriteria($request));
        $municipios = $this->municipiosRepository->all();
        */
        $municipios = DB::table('municipios')
                    ->join('departamentos', 'municipios.departamentos_id', '=', 'departamentos.id')
                    ->select('municipios.*', 'departamentos.descripcion as departamento')
                    ->get();

        return view('municipios.index')
            ->with('municipios', $municipios);
    }

    /**
     * Show the form for creating a new Municipios.
     *
     * @return Response
     */
    public function create()
    {
        $Departamentos=Departamentos::all()->pluck('descripcion','id');
        return view('municipios.create')
            ->with('Departamentos', $Departamentos);
    }

    /**
     * Store a newly created Municipios in storage.
     *
     * @param CreateMunicipiosRequest $request
     *
     * @return Response
     */
    public function store(CreateMunicipiosRequest $request)
    {
        $input = $request->all();

        $municipios = $this->municipiosRepository->create($input);

        Flash::success('Municipios Guardado exitosamente.');

        return redirect(route('municipios.index'));
    }

    /**
     * Display the specified Municipios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $municipios = $this->municipiosRepository->findWithoutFail($id);

        if (empty($municipios)) {
            Flash::error('Municipios not found');

            return redirect(route('municipios.index'));
        }

        return view('municipios.show')->with('municipios', $municipios);
    }

    /**
     * Show the form for editing the specified Municipios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $municipios = $this->municipiosRepository->findWithoutFail($id);
        $Departamentos=Departamentos::all()->pluck('descripcion','id');

        if (empty($municipios)) {
            Flash::error('Municipios not found');

            return redirect(route('municipios.index'));
        }

        return view('municipios.edit')->with('municipios', $municipios)->with('Departamentos', $Departamentos);
    }

    /**
     * Update the specified Municipios in storage.
     *
     * @param  int              $id
     * @param UpdateMunicipiosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMunicipiosRequest $request)
    {
        $municipios = $this->municipiosRepository->findWithoutFail($id);

        if (empty($municipios)) {
            Flash::error('Municipios not found');

            return redirect(route('municipios.index'));
        }

        $municipios = $this->municipiosRepository->update($request->all(), $id);

        Flash::success('Municipios Actualizado con exito.');

        return redirect(route('municipios.index'));
    }

    /**
     * Remove the specified Municipios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $municipios = $this->municipiosRepository->findWithoutFail($id);

        if (empty($municipios)) {
            Flash::error('Municipios not found');

            return redirect(route('municipios.index'));
        }

        $this->municipiosRepository->delete($id);

        Flash::success('Municipios Borrado con exito.');

        return redirect(route('municipios.index'));
    }
}
