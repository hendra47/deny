<?php

namespace App\Repositories;

use App\Models\kriteria;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class kriteriaRepository
 * @package App\Repositories
 * @version December 2, 2017, 3:45 am UTC
 *
 * @method kriteria findWithoutFail($id, $columns = ['*'])
 * @method kriteria find($id, $columns = ['*'])
 * @method kriteria first($columns = ['*'])
*/
class kriteriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return kriteria::class;
    }
}
