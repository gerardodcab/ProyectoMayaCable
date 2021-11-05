<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Promocione
 *
 * @property $id_prom
 * @property $nombre
 * @property $Descripcion
 * @property $imagen
 * @property $fechainicio
 * @property $fechavencimiento
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Promocione extends Model
{
    
    static $rules = [
		'id_prom' => 'required',
		'nombre' => 'required',
		'Descripcion' => 'required',
		'imagen' => 'required',
		'fechainicio' => 'required',
		'fechavencimiento' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_prom','nombre','Descripcion','imagen','fechainicio','fechavencimiento','activo'];



}
