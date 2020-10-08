<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CargosTableSeeder::class);
         $this->call(EmpleadosTableSeeder::class);
         $this->call(EmpresasTableSeeder::class);
         $this->call(EmpleadoEmpresasTableSeeder::class);
         $this->call(RolesTableSeeder::class);
    }
}
