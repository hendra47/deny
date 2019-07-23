<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class siswa
 * @package App\Models
 * @version November 18, 2017, 10:33 am UTC
 *
 * @method static siswa find($id=null, $columns = array())
 * @method static siswa|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string nama_siswa
 * @property string tahun_ajaran
 * @property string jk
 * @property string jurusan
 */
class siswa extends Model
{

    public $table = 'siswas';
    


    public $fillable = [
        'nama_siswa',
        'tahun_ajaran',
        'jk',
        'jurusan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_siswa' => 'string',
        'tahun_ajaran' => 'string',
        'jk' => 'string',
        'jurusan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_siswa' => 'required',
        'tahun_ajaran' => 'required',
        'jk' => 'required',
        'jurusan' => 'required'
    ];

    
}
