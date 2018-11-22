<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductosRequest;
use App\Http\Requests\UpdateProductosRequest;
use App\Repositories\ProductosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Categorias;
use App\Models\Entradas;
use Response;

class ProductosController extends AppBaseController
{
    /** @var  ProductosRepository */
    private $productosRepository;

    public function __construct(ProductosRepository $productosRepo)
    {
        $this->productosRepository = $productosRepo;
    }

    /**
     * Display a listing of the Productos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        /*
        $this->productosRepository->pushCriteria(new RequestCriteria($request));
        $productos = $this->productosRepository->all();
        */
        $productos = DB::table('productos')
                    ->join('categorias', 'productos.categorias_id', '=', 'categorias.id')
                    ->select('productos.*', 'categorias.descripcion as categorias')
                    ->get();

        return view('productos.index')
            ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new Productos.
     *
     * @return Response
     */
    public function create()
    {
        $Categorias=Categorias::all()->pluck('descripcion','id');
        return view('productos.create')->with('Categorias',$Categorias);
    }

    /**
     * Store a newly created Productos in storage.
     *
     * @param CreateProductosRequest $request
     *
     * @return Response
     */
    public function store(CreateProductosRequest $request)
    {
        $input = $request->all();

        $productos = $this->productosRepository->create($input);

        Flash::success('Productos Guardado exitosamente.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified Productos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productos = $this->productosRepository->findWithoutFail($id);

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        $entradas = DB::table('entradas')->where('productos_id',$id)->get();


        return view('productos.show')->with('productos', $productos)->with('entradas', $entradas);
    }

    /**
     * Show the form for editing the specified Productos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $Categorias=Categorias::all()->pluck('descripcion','id');
        $productos = $this->productosRepository->findWithoutFail($id);

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        return view('productos.edit')->with('productos', $productos)->with('Categorias',$Categorias);
    }

    /**
     * Update the specified Productos in storage.
     *
     * @param  int              $id
     * @param UpdateProductosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductosRequest $request)
    {
        $productos = $this->productosRepository->findWithoutFail($id);

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        $productos = $this->productosRepository->update($request->all(), $id);

        Flash::success('Productos Actualizado con exito.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified Productos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productos = $this->productosRepository->findWithoutFail($id);

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        $this->productosRepository->delete($id);

        Flash::success('Productos Borrado con exito.');

        return redirect(route('productos.index'));
    }
}
