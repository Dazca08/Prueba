<?php

use Illuminate\Database\Seeder;
use App\Empleado;
class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Empleado::truncate();
    	for($i=1;$i<21;$i++){
          
           Empleado::create([
          'nombre'=>"Empleado{$i}",
          'apellido'=>"apellido em {$i}",
          'cargo_id'=>mt_rand(1,5),
          ]);
    	}
    }
}
