<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
     protected $fillable=['nombre' , 'apellido' , 'cargo_id'];

  public function cargo()
    {
        return $this->belongsTo('App\cargo');
    }
    
}
