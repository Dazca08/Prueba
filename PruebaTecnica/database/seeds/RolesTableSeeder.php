<?php
use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
    	Role::create([
        'nombre'=>'Admin',
        'display_name'=>'Administrador de la pagina',

    	]);
    	Role::create([
        'nombre'=>'usuario_de_consulta',
        'display_name'=>'Usuario de la pagina',

    	]);
    }
}
