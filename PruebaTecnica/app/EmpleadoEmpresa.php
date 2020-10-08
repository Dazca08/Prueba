<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadoEmpresa extends Model
{
    protected $fillable=['id_empleado' , 'id_empresa' ];
    public function empleado()
    {
        return $this->belongsTo('App\Empleado' , 'id_empleado');
    }
    public function empresa()
    {
        return $this->belongsTo('App\Empresa' , 'id_empresa');
    }
}
