<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Categorias
 * @package App\Models
 * @version November 21, 2018, 11:18 pm UTC
 *
 * @property string descripcion
 */
class Categorias extends Model
{
    

    public $table = 'categorias';
    

    


    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required'
    ];

    
}
