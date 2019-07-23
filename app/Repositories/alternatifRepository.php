<?php

namespace App\Repositories;

use App\Models\alternatif;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class alternatifRepository
 * @package App\Repositories
 * @version December 2, 2017, 7:09 am UTC
 *
 * @method alternatif findWithoutFail($id, $columns = ['*'])
 * @method alternatif find($id, $columns = ['*'])
 * @method alternatif first($columns = ['*'])
*/
class alternatifRepository extends BaseRepository
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
        return alternatif::class;
    }
}
