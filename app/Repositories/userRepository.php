<?php

namespace App\Repositories;

use App\Models\user;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class userRepository
 * @package App\Repositories
 * @version August 19, 2017, 10:27 am UTC
 *
 * @method user findWithoutFail($id, $columns = ['*'])
 * @method user find($id, $columns = ['*'])
 * @method user first($columns = ['*'])
*/
class userRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'username',
        'password',
        'group'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return user::class;
    }
}
