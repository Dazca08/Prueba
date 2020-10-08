<?php

use Illuminate\Database\Seeder;
use App\Cargo;
class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Cargo::truncate();
    	for($i=1;$i<6;$i++){
          
           Cargo::create([
          'nombre'=>"Cargo{$i}",
          'display_name'=>" El Cargo {$i}",
         
           ]);
    	}
    }
}
