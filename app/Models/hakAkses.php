<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class hakAkses
 * @package App\Models
 * @version November 18, 2017, 10:08 am UTC
 *
 * @method static hakAkses find($id=null, $columns = array())
 * @method static hakAkses|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string group
 * @property string menu
 * @property string keterangan
 */
class hakAkses extends Model
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
