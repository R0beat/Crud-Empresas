<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $nombre
 * @property $fecha_nacimiento
 * @property $correo
 * @property $sexo
 * @property $telefono
 * @property $celular
 * @property $fecha_ingreso
 * @property $empresa
 * @property $departamento
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
      'nombre' => 'required',
      'fecha_nacimiento'=>'required',
      'correo' => 'required',
      'fecha_ingreso'=>'required',


    ];

    protected $perPage = 20;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fecha_nacimiento','correo','sexo','telefono','celular','fecha_ingreso','empresa','departamento'];



}
