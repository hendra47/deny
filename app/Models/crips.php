<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class crips
 * @package App\Models
 * @version December 2, 2017, 4:31 am UTC
 *
 * @method static crips find($id=null, $columns = array())
 * @method static crips|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string id_kriteria
 * @property string type
 * @property hidden nama
 * @property integer nilai
 * @property string keterangan
 */
class crips extends Model
{

    public $table = 'crips';
    


    public $fillable = [
        'id_kriteria',
        'type',
        'nama',
        'nilai',
        'keterangan',
        'rumus'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_kriteria' => 'string',
        'type' => 'string',
        'nilai' => 'integer',
        'keterangan' => 'string',
        'rumus'=> 'string'
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nilai' => 'required',
        'keterangan' => 'required'
    ];

    public function kriteria()
    {
        return $this->belongsTo('App\Models\kriteria');
    }

    
}
