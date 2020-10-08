<?php

use Illuminate\Database\Seeder;
use App\EmpleadoEmpresa;
class EmpleadoEmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoEmpresa::truncate();
        for($i=1;$i<21;$i++){
          
           EmpleadoEmpresa::create([
          'id_empresa'=>mt_rand(1,10),
          'id_empleado'=>$i,
         
           ]);
    	}
    }
}
