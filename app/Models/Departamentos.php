<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Departamentos
 * @package App\Models
 * @version November 21, 2018, 10:45 pm UTC
 *
 * @property string descripcion
 */
class Departamentos extends Model
{
    

    public $table = 'departamentos';
    

    


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
        'descripcion' => 'required|unique:departamentos',
    ];

    
}
