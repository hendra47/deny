<?php

namespace App\Repositories;

use App\Models\siswa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class siswaRepository
 * @package App\Repositories
 * @version November 18, 2017, 10:33 am UTC
 *
 * @method siswa findWithoutFail($id, $columns = ['*'])
 * @method siswa find($id, $columns = ['*'])
 * @method siswa first($columns = ['*'])
*/
class siswaRepository extends BaseRepository
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
        return siswa::class;
    }
}
