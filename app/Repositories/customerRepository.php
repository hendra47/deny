<?php

namespace App\Repositories;

use App\Models\customer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class customerRepository
 * @package App\Repositories
 * @version August 19, 2017, 4:29 pm UTC
 *
 * @method customer findWithoutFail($id, $columns = ['*'])
 * @method customer find($id, $columns = ['*'])
 * @method customer first($columns = ['*'])
*/
class customerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_customer',
        'nama_customer'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return customer::class;
    }
}
