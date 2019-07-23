<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class nilai_alternatif
 * @package App\Models
 * @version December 2, 2017, 7:55 am UTC
 *
 * @method static nilai_alternatif find($id=null, $columns = array())
 * @method static nilai_alternatif|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string id_alternatif
 * @property string Absensi
 * @property string eskul
 * @property string sikap
 * @property string rapot
 */
class nilai_alternatif extends Model
{

    public $table = 'nilai_alternatifs';
    


    public $fillable = [
        'id_alternatif',
        'id_crips',
        'kriteria',
        'kode',
        'input'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_alternatif' => 'string',
        'id_crips' => 'string',
        'kriteria' => 'string',
        'kode',
        'input'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_alternatif' => 'required',
        'kode'
    ];

    
}
