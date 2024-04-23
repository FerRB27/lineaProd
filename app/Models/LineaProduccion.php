<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineaProduccion extends Model
{

    protected $table = 'linea_produccion';
    protected $primaryKey = 'idlinea_produccion';
    public $timestamps = false;
    protected $fillable = [
        'isactive',
        'nombre'
    ];

    protected $attributes = [
        'isactive' => 'N'
    ];

    public function obtenerTodos()
    {
        return LineaProduccion::all();
    }

    public function obtenerPorId($id)
    {
        return LineaProduccion::find($id);
    }

    public function crear(LineaProduccion $obj) 
    {
        return $obj->save();
    }

    public function editar(LineaProduccion $obj){

        return $obj->save();
    }

    public function eliminar(LineaProduccion $obj){
        
        return $obj->delete();
    }
}
