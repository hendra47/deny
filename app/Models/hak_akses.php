<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class hak_akses
 * @package App\Models
 * @version November 18, 2017, 10:04 am UTC
 *
 * @method static hak_akses find($id=null, $columns = array())
 * @method static hak_akses|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string group
 * @property string menu
 * @property string keterangan
 */
class hak_akses extends Model
{

    public $table = 'hak_akses';
    


    public $fillable = [
        'group',
        'menu',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'group' => 'string',
        'menu' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'group' => 'required',
        'menu' => 'required',
        'keterangan' => 'required'
    ];

    
}
