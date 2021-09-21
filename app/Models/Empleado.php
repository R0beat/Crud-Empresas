<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id_empleado
 * @property $nombre
 * @property $fecha_nacimiento
 * @property $correo
 * @property $sexo
 * @property $telefono
 * @property $celular
 * @property $fecha_ingreso
 * @property $empresa_id
 *
 * @property Compania $compania
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'id_empleado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_empleado','nombre','fecha_nacimiento','correo','sexo','telefono','celular','fecha_ingreso','empresa_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function compania()
    {
        return $this->hasOne('App\Models\Compania', 'id_compania', 'empresa_id');
    }
    

}
