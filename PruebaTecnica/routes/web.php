<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/login',['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);

Route::post('login','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout');
Route::resource('empleados','EmpleadosController');
Route::resource('empresas','EmpresasController');
Route::resource('empleadoempresas','EmpleadoEmpresaController');

Route::get('/',['as'=>'home',function(){
  return view('home');
}]);

Route::get('Cargos',function(){
return \App\Cargo::find(1)->empleados;
});

Route::get('EmpleadosCargo',function(){
return \App\Empleado::find(1)->cargo;
});