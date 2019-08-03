<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class jurusan
 * @package App\Models
 * @version August 3, 2019, 10:15 am UTC
 *
 * @method static jurusan find($id=null, $columns = array())
 * @method static jurusan|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string nama
 * @property string keterangan
 */
class jurusan extends Model
{

    public $table = 'jurusan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nama',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
