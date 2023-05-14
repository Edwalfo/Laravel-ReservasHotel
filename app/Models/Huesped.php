<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Huesped
 *
 * @property $id
 * @property $nombre
 * @property $tipodocumento_id
 * @property $n_documento
 * @property $fecha_nacimiento
 * @property $direccion
 * @property $correo
 * @property $telefono
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Reserva[] $reservas
 * @property Tipodocumento $tipodocumento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Huesped extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipodocumento_id' => 'required',
		'n_documento' => 'required',
		'fecha_nacimiento' => 'required',
		'estado' => 'nullable',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipodocumento_id','n_documento','fecha_nacimiento','direccion','correo','telefono','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'huesped_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipodocumento()
    {
        return $this->hasOne('App\Models\Tipodocumento', 'id', 'tipodocumento_id');
    }
    

}
