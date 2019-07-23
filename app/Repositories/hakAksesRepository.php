<?php

namespace App\Repositories;

use App\Models\hakAkses;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class hakAksesRepository
 * @package App\Repositories
 * @version November 18, 2017, 10:08 am UTC
 *
 * @method hakAkses findWithoutFail($id, $columns = ['*'])
 * @method hakAkses find($id, $columns = ['*'])
 * @method hakAkses first($columns = ['*'])
*/
class hakAksesRepository extends BaseRepository
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
        return hakAkses::class;
    }
}
