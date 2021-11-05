<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipospaquete
 *
 * @property $id_tipo
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Paquete[] $paquetes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipospaquete extends Model
{
    
    static $rules = [
		'id_tipo' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo','nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paquetes()
    {
        return $this->hasMany('App\Models\Paquete', 'id_tipo', 'id_tipo');
    }
    

}
