<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

/**
 * Class Habitacion
 *
 * @property $id
 * @property $numero
 * @property $piso_id
 * @property $tipohabitacion_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Piso $piso
 * @property Reserva[] $reservas
 * @property Tipohabitacion $tipohabitacion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Habitacion extends Model
{

    static $rules = [
        'numero' => 'required|numeric|min:1',
        'piso_id' => 'required',
        'tipohabitacion_id' => 'nullable',
        'estado' => 'nullable',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero', 'piso_id', 'tipohabitacion_id', 'estado'];


    protected $datos = ['estado'];
    public const ESTADOSHABITACIONES = ['Disponible' , 'Ocupada', 'Limpieza', 'Repacion', 'Reservada'];

    public function estado(){
        return Self::ESTADOSHABITACIONES[$this->estado];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function piso()
    {
        return $this->hasOne('App\Models\Piso', 'id', 'piso_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'habitacion_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipohabitacion()
    {
        return $this->hasOne('App\Models\Tipohabitacion', 'id', 'tipohabitacion_id');
    }
}
