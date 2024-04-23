<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'idproducto';
    public $timestamps = false;
    protected $fillable = [
        'created',
        'isactive',
        'nombre',
        'codigo',
        'idlinea_produccion'
    ];

    public function obtenerTodos()
    {
        $list = DB::table('producto')
        ->join('linea_produccion', 'linea_produccion.idlinea_produccion', '=', 'producto.idlinea_produccion')
        ->select('producto.*', 'linea_produccion.nombre AS nombre_linea_produccion')
        ->get();

        return $list;
    }

    public function obtenerPorId($id)
    {
        return Producto::find($id);
    }

    public function crear(Producto $obj) 
    {
        return $obj->save();
    }

    public function editar(Producto $obj){

        return $obj->save();
    }

    public function eliminar(Producto $obj){
        
        return $obj->delete();
    }
}
