<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  		User::truncate();

      User::create([
          'name'=>"Administrador1",
          'email'=>"Administrador1@gmail.com",
          'password'=>bcrypt('12344'),
          'role_id'=>1,
          ]);
      User::create([
          'name'=>"Administrador2",
          'email'=>"Administrador2@gmail.com",
          'password'=>bcrypt('12344'),
          'role_id'=>1,
          ]);
      User::create([
          'name'=>"Usuario1",
          'email'=>"Usuario1@gmail.com",
          'password'=>bcrypt('12344'),
          'role_id'=>2,
          ]);
      User::create([
          'name'=>"Usuario2",
          'email'=>"Usuario2@gmail.com",
          'password'=>bcrypt('12344'),
          'role_id'=>2,
          ]);


    	/*for($i=1;$i<25;$i++){
          if($i<21){
           User::create([
          'name'=>"Empleado{$i}",
          'email'=>"empleado{$i}@gmail.com",
          'password'=>bcrypt('12344'),
          'role_id'=>2,
          ]);

          }

          else if($i>20){
           User::create([
          'name'=>"UsuarioAdmin{$i}",
          'email'=>"admin{$i}@gmail.com",
          'password'=>bcrypt('12344'),
          'role_id'=>1,
          ]);
          }
        
    	}*/
       
    }
}
