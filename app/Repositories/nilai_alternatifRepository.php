<?php

namespace App\Repositories;

use App\Models\nilai_alternatif;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class nilai_alternatifRepository
 * @package App\Repositories
 * @version December 2, 2017, 7:55 am UTC
 *
 * @method nilai_alternatif findWithoutFail($id, $columns = ['*'])
 * @method nilai_alternatif find($id, $columns = ['*'])
 * @method nilai_alternatif first($columns = ['*'])
*/
class nilai_alternatifRepository extends BaseRepository
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
        return nilai_alternatif::class;
    }
}
