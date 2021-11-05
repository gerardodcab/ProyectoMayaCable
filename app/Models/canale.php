<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Canale
 *
 * @property $id_canal
 * @property $nombre
 * @property $numero
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property PaquetesCanale[] $paquetesCanales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Canale extends Model
{
    
    static $rules = [
		'id_canal' => 'required',
		'nombre' => 'required',
		'numero' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_canal','nombre','numero','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paquetesCanales()
    {
        return $this->hasMany('App\Models\PaquetesCanale', 'id_canal', 'id_canal');
    }
    

}
