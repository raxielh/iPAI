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
class Productos extends Model
{
    

    public $table = 'productos';
    

    


    public $fillable = [
        'descripcion',
        'categorias_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string',
        'categorias_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'categorias_id' => 'required'
    ];

    
}
