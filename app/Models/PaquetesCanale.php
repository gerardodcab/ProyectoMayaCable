<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaquetesCanale
 *
 * @property $id_pack_canal
 * @property $id_pack
 * @property $id_canal
 * @property $created_at
 * @property $updated_at
 *
 * @property Canale $canale
 * @property Paquete $paquete
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PaquetesCanale extends Model
{
    
    static $rules = [
		'id_pack_canal' => 'required',
		'id_pack' => 'required',
		'id_canal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pack_canal','id_pack','id_canal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function canale()
    {
        return $this->hasOne('App\Models\Canale', 'id_canal', 'id_canal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paquete()
    {
        return $this->hasOne('App\Models\Paquete', 'id_pack', 'id_pack');
    }
    

}
