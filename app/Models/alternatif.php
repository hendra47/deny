<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class alternatif
 * @package App\Models
 * @version December 2, 2017, 7:09 am UTC
 *
 * @method static alternatif find($id=null, $columns = array())
 * @method static alternatif|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string kode
 * @property integer id_siswa
 * @property string nama
 * @property string keterangan
 */
class alternatif extends Model
{

    public $table = 'alternatifs';
    


    public $fillable = [
        'kode',
        'id_siswa',
        'nama',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode' => 'string',
        'id_siswa' => 'integer',
        'nama' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode' => 'required',
        'id_siswa' => 'required',
        'keterangan' => 'required'
    ];

    
}
