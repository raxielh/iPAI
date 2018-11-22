<?php

namespace App\Repositories;

use App\Models\Municipios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MunicipiosRepository
 * @package App\Repositories
 * @version November 21, 2018, 10:52 pm UTC
 *
 * @method Municipios findWithoutFail($id, $columns = ['*'])
 * @method Municipios find($id, $columns = ['*'])
 * @method Municipios first($columns = ['*'])
*/
class MunicipiosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'departamentos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Municipios::class;
    }
}
