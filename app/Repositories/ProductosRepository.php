<?php

namespace App\Repositories;

use App\Models\Productos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductosRepository
 * @package App\Repositories
 * @version November 21, 2018, 11:25 pm UTC
 *
 * @method Productos findWithoutFail($id, $columns = ['*'])
 * @method Productos find($id, $columns = ['*'])
 * @method Productos first($columns = ['*'])
*/
class ProductosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'categorias_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Productos::class;
    }
}
