<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipohabitacion
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $descripcion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Habitacion[] $habitacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipohabitacion extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'descripcion' => 'required',
		'estado' => 'nullable',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio','descripcion','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function habitacions()
    {
        return $this->hasMany('App\Models\Habitacion', 'tipohabitacion_id', 'id');
    }
    

}
