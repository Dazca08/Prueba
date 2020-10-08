<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable=['nombre' , 'nit'];
    public function empleado()
    {
        return $this->belongsTo('App\EmpleadoEmpresa');
    }
}
