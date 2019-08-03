<?php

namespace App\Repositories;

use App\Models\jurusan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class jurusanRepository
 * @package App\Repositories
 * @version August 3, 2019, 10:15 am UTC
 *
 * @method jurusan findWithoutFail($id, $columns = ['*'])
 * @method jurusan find($id, $columns = ['*'])
 * @method jurusan first($columns = ['*'])
*/
class jurusanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'keterangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return jurusan::class;
    }
}
