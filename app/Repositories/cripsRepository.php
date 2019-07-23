<?php

namespace App\Repositories;

use App\Models\crips;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class cripsRepository
 * @package App\Repositories
 * @version December 2, 2017, 4:31 am UTC
 *
 * @method crips findWithoutFail($id, $columns = ['*'])
 * @method crips find($id, $columns = ['*'])
 * @method crips first($columns = ['*'])
*/
class cripsRepository extends BaseRepository
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
        return crips::class;
    }
}
