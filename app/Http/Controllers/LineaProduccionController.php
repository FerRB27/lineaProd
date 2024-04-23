<?php

namespace App\Http\Controllers;

use App\Models\LineaProduccion;
use Illuminate\Http\Request;

class LineaProduccionController extends Controller
{
    private $model;

    function __construct(LineaProduccion $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lineaProduccionList = $this->model->obtenerTodos();

        return view('lineaproduccion.lista', ['lineaProduccionList' => $lineaProduccionList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lineaproduccion.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new = new LineaProduccion([
            'nombre' => $request->nombre,
            'isactive' => $request->isactive == 'on' ? 'Y' : 'N' ]);

        $this->model->crear($new);

        return redirect()->action([LineaProduccionController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $obj = $this->model->obtenerPorId($id);

        return view('lineaproduccion.mostrar', ['linea_produccion' => $obj]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $obj = $this->model->obtenerPorId($id);

        return view('lineaproduccion.editar', ['linea_produccion' => $obj]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $obj = $this->model->obtenerPorId($id);
        $obj->fill([
            'isactive' => $request->isactive == 'on' ? 'Y' : 'N',
            'nombre' => $request->nombre
        ]);

        $this->model->editar($obj);

        return redirect()->action([LineaProduccionController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $obj = $this->model->obtenerPorId($id);

        $this->model->eliminar($obj);

        return redirect()->action([LineaProduccionController::class, 'index']);
    }
}
