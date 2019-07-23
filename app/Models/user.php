<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class user
 * @package App\Models
 * @version August 19, 2017, 10:27 am UTC
 *
 * @method static user find($id=null, $columns = array())
 * @method static user|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string name
 * @property string username
 * @property string password
 * @property string group
 */
class user extends Model
{

    public $table = 'users';
    
    public $remember_token=false;

    public $fillable = [
        'name',
        'username',
        'password',
        'group',
        'nik'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'username' => 'string',
        'password' => 'string',
        'group' => 'string',
        'nik'   => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'username' => 'required',
        'password' => 'required',
        'group' => 'required',
        'nik' => 'required'
    ];

    
}
