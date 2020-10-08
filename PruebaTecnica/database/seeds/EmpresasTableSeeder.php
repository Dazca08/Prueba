<?php
use App\Empresa;
use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Empresa::truncate();
    	for($i=1;$i<11;$i++){
          
           Empresa::create([
          'nombre'=>"Empresa {$i}",
          'logo'=>"logo{$i}",
          'nit'=>12345678+$i,
          ]);
    	}
    }
}
