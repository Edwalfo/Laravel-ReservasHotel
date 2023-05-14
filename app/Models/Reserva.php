<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $entrada
 * @property $salida
 * @property $codigo
 * @property $estado
 * @property $huesped_id
 * @property $habitacion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura[] $facturas
 * @property Habitacion $habitacion
 * @property Huesped $huesped
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'entrada' => 'required',
		'salida' => 'required',
		'codigo' => 'required',
		'estado' => 'nullable',
		'huesped_id' => 'required',
    ];

    protected $perPage = 20;

    
    protected $datos = ['estado'];
    public const ESTADOSRESERVAS = ['Creada' , 'Hospedado', 'Cancelada', 'Perdida', 'Finalizada'];

    public function estado(){
        return Self::ESTADOSRESERVAS[$this->estado];
    }

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entrada','salida','codigo','estado','huesped_id','habitacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'reserva_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function habitacion()
    {
        return $this->hasOne('App\Models\Habitacion', 'id', 'habitacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function huesped()
    {
        return $this->hasOne('App\Models\Huesped', 'id', 'huesped_id');
    }
    

}
