<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piso
 *
 * @property $id
 * @property $numero
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piso extends Model
{
    
    static $rules = [
		'numero' => 'required|numeric|min:1',
		'estado' => 'nullable',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','estado'];



}
