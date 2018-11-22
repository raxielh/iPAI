<?php

namespace App\Repositories;

use App\Models\Departamentos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DepartamentosRepository
 * @package App\Repositories
 * @version November 21, 2018, 10:45 pm UTC
 *
 * @method Departamentos findWithoutFail($id, $columns = ['*'])
 * @method Departamentos find($id, $columns = ['*'])
 * @method Departamentos first($columns = ['*'])
*/
class DepartamentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Departamentos::class;
    }
}
