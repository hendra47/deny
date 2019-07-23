<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class kriteria
 * @package App\Models
 * @version December 2, 2017, 3:45 am UTC
 *
 * @method static kriteria find($id=null, $columns = array())
 * @method static kriteria|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string kode
 * @property string kriteria
 * @property integer nilai
 * @property string type
 * @property string keterangan
 */
class kriteria extends Model
{

    public $table = 'kriterias';
    


    public $fillable = [
        'kode',
        'kriteria',
        'nilai',
        'type',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kode' => 'string',
        'kriteria' => 'string',
        'nilai' => 'integer',
        'type' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode' => 'required',
        'kriteria' => 'required',
        'nilai' => 'required',
        'type' => 'required',
        'keterangan' => 'required'
    ];


    public function kriteria()
    {
        return $this->hasMany('App\Models\crips');
    }

    
}
