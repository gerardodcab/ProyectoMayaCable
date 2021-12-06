<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paquete
 *
 * @property $id_pack
 * @property $nombre
 * @property $velocidad
 * @property $precio
 * @property $precioinstal
 * @property $imagen
 * @property $id_tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property PaquetesCanale[] $paquetesCanales
 * @property Tipospaquete $tipospaquete
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paquete extends Model
{
    
    static $rules = [
		'id_pack' => 'required',
		'nombre' => 'required',
		'velocidad' => 'nullable',
		'precio' => 'required',
		'precioinstal' => 'required',
		'imagen' => 'required',
		'id_tipo' => 'required',
    ];

    protected $perPage = 20;
    protected $primaryKey = "id_pack";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pack','nombre','velocidad','precio','precioinstal','imagen','id_tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paquetesCanales()
    {
        return $this->hasMany('App\Models\PaquetesCanale', 'id_pack', 'id_pack');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipospaquete()
    {
        return $this->hasOne('App\Models\Tipospaquete', 'id_tipo', 'id_tipo');
    }
    

}
