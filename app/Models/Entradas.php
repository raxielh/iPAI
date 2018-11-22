<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Productos
 * @package App\Models
 * @version November 21, 2018, 11:25 pm UTC
 *
 * @property string descripcion
 * @property integer categorias_id
 */
class Entradas extends Model
{
    

    public $table = 'entradas';
    

    public $fillable = [
        'cantidad',
        'lote',
        'cantidad_dosis',
        'productos_id',
        'fecha_ingreso',
        'fecha_vencimiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cantidad'=> 'integer',
        'lote'=> 'string',
        'cantidad_dosis'=> 'integer',
        'productos_id'=> 'integer',
        'fecha_ingreso'=> 'date',
        'fecha_vencimiento'=> 'date',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cantidad'=> 'required',
        'lote'=> 'required',
        'cantidad_dosis'=> 'required',
        'productos_id'=> 'required',
        'fecha_ingreso'=> 'required',
        'fecha_vencimiento'=> 'required',
    ];

    
}
