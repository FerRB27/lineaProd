<?php

namespace App\Http\Controllers;

use App\Models\LineaProduccion;
use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    private $model;

    function __construct(Producto $model)
    {
        $this->model = $model;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = $this->model->obtenerTodos();

        return view('producto.lista', ['productoList' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lineaProduccionModel = new LineaProduccion();

        $list = $lineaProduccionModel->obtenerTodos();

        return view('producto.crear', ['lineaProduccionList' => $list]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'created' => (Carbon::now())->toDateTimeLocalString(),
            'isactive' => $request->isactive == 'on' ? 'Y' : 'N',
            'idlinea_produccion' => $request->idlinea_produccion
        ]);

        $this->model->crear($producto);

        return redirect()->action([ProductoController::class, 'index']);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $producto = $this->model->obtenerPorId($id);
        $lineaProduccionModel = new LineaProduccion();

        $list = $lineaProduccionModel->obtenerTodos();

        return view('producto.editar', ['producto' => $producto, 'lineaProduccionList' => $list]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $producto = $this->model->obtenerPorId($id);

        $producto->fill([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'isactive' => $request->isactive == 'on' ? 'Y' : 'N',
            'idlinea_produccion' => $request->idlinea_produccion
        ]);

        $this->model->editar($producto);

        return redirect()->action([ProductoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $producto = $this->model->obtenerPorId($id);
        
        $this->model->eliminar($producto);

        return redirect()->action([ProductoController::class, 'index']);
    }
}
