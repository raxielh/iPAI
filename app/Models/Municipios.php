<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Municipios
 * @package App\Models
 * @version November 21, 2018, 10:52 pm UTC
 *
 * @property string descripcion
 * @property integer departamentos_id
 */
class Municipios extends Model
{
    

    public $table = 'municipios';
    

    


    public $fillable = [
        'descripcion',
        'departamentos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string',
        'departamentos_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'departamentos_id' => 'required'
    ];

    
}
