<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth/login');
});
Auth::routes();

Route::get('/admin/perfil',['as'=>'admin.perfil','uses'=>'Admin\perfilController@index']);
Route::get('/admin/perfil/adicionar',['as'=>'admin.perfil.adicionar','uses'=>'Admin\perfilController@adicionar']);
Route::post('/admin/perfil/salvar',['as'=>'admin.perfil.salvar','uses'=>'Admin\perfilController@salvar']);
Route::get('/admin/perfil/editar/{id}',['as'=>'admin.perfil.editar','uses'=>'Admin\perfilController@editar']);
Route::put('/admin/perfil/atualizar',['as'=>'admin.perfil.atualizar','uses'=>'Admin\perfilController@atualizar']);
Route::get('/admin/perfil/deletar/{id}',['as'=>'admin.perfil.deletar','uses'=>'Admin\perfilController@deletar']);

Route::get('/admin/os',['as'=>'admin.os','uses'=>'Admin\osController@index']);
Route::get('/admin/os/adicionar',['as'=>'admin.os.adicionar','uses'=>'Admin\osController@adicionar']);
Route::post('/admin/os/salvar',['as'=>'admin.os.salvar','uses'=>'Admin\osController@salvar']);
Route::get('/admin/os/editar/{id}',['as'=>'admin.os.editar','uses'=>'Admin\osController@editar']);
Route::put('/admin/os/atualizar',['as'=>'admin.os.atualizar','uses'=>'Admin\osController@atualizar']);
Route::get('/admin/os/deletar/{id}',['as'=>'admin.os.deletar','uses'=>'Admin\osController@deletar']);

Route::get('/admin/material_os',['as'=>'admin.material_os','uses'=>'Admin\material_osController@index']);
Route::get('/admin/material_os/adicionar',['as'=>'admin.material_os.adicionar','uses'=>'Admin\material_osController@adicionar']);
Route::post('/admin/material_os/salvar',['as'=>'admin.material_os.salvar','uses'=>'Admin\material_osController@salvar']);
Route::get('/admin/material_os/editar/{id}',['as'=>'admin.material_os.editar','uses'=>'Admin\material_osController@editar']);
Route::put('/admin/material_os/atualizar',['as'=>'admin.material_os.atualizar','uses'=>'Admin\material_osController@atualizar']);
Route::get('/admin/material_os/deletar/{id}',['as'=>'admin.material_os.deletar','uses'=>'Admin\material_osController@deletar']);

Route::get('/admin/estoque',['as'=>'admin.estoque','uses'=>'Admin\estoqueController@index']);
Route::get('/admin/estoque/adicionar',['as'=>'admin.estoque.adicionar','uses'=>'Admin\estoqueController@adicionar']);
Route::post('/admin/estoque/salvar',['as'=>'admin.estoque.salvar','uses'=>'Admin\estoqueController@salvar']);
Route::get('/admin/estoque/editar/{id}',['as'=>'admin.estoque.editar','uses'=>'Admin\estoqueController@editar']);
Route::put('/admin/estoque/atualizar',['as'=>'admin.estoque.atualizar','uses'=>'Admin\estoqueController@atualizar']);
Route::get('/admin/estoque/deletar/{id}',['as'=>'admin.estoque.deletar','uses'=>'Admin\estoqueController@deletar']);


Route::get('/admin/email',['as'=>'admin.email','uses'=>'Admin\emailController@index']);
Route::get('/admin/email/adicionar',['as'=>'admin.email.adicionar','uses'=>'Admin\emailController@adicionar']);
Route::post('/admin/email/salvar',['as'=>'admin.email.salvar','uses'=>'Admin\emailController@salvar']);
Route::get('/admin/email/editar/{id}',['as'=>'admin.email.editar','uses'=>'Admin\emailController@editar']);
Route::put('/admin/email/atualizar',['as'=>'admin.email.atualizar','uses'=>'Admin\emailController@atualizar']);
Route::get('/admin/email/deletar/{id}',['as'=>'admin.email.deletar','uses'=>'Admin\emailController@deletar']);


Route::get('/admin/contato',['as'=>'admin.contato','uses'=>'Admin\contatoController@index']);
Route::get('/admin/contato/adicionar',['as'=>'admin.contato.adicionar','uses'=>'Admin\contatoController@adicionar']);
Route::post('/admin/contato/salvar',['as'=>'admin.contato.salvar','uses'=>'Admin\contatoController@salvar']);
Route::get('/admin/contato/editar/{id}',['as'=>'admin.contato.editar','uses'=>'Admin\contatoController@editar']);
Route::put('/admin/contato/atualizar',['as'=>'admin.contato.atualizar','uses'=>'Admin\contatoController@atualizar']);
Route::get('/admin/contato/deletar/{id}',['as'=>'admin.contato.deletar','uses'=>'Admin\contatoController@deletar']);


Route::get('/admin/cliente',['as'=>'admin.cliente','uses'=>'Admin\clienteController@index']);
Route::get('/admin/cliente/adicionar',['as'=>'admin.cliente.adicionar','uses'=>'Admin\clienteController@adicionar']);
Route::post('/admin/cliente/salvar',['as'=>'admin.cliente.salvar','uses'=>'Admin\clienteController@salvar']);
Route::get('/admin/cliente/editar/{id}',['as'=>'admin.cliente.editar','uses'=>'Admin\clienteController@editar']);
Route::put('/admin/cliente/atualizar',['as'=>'admin.cliente.atualizar','uses'=>'Admin\clienteController@atualizar']);
Route::get('/admin/cliente/deletar/{id}',['as'=>'admin.cliente.deletar','uses'=>'Admin\clienteController@deletar']);

Route::get('/admin/Users',['as'=>'admin.Users','uses'=>'Admin\UsersController@index']);
Route::get('/admin/Users/adicionar',['as'=>'admin.Users.adicionar','uses'=>'Admin\UsersController@adicionar']);
Route::post('/admin/Users/salvar',['as'=>'admin.Users.salvar','uses'=>'Admin\UsersController@salvar']);
Route::get('/admin/Users/editar/{id}',['as'=>'admin.Users.editar','uses'=>'Admin\UsersController@editar']);
Route::put('/admin/Users/atualizar',['as'=>'admin.Users.atualizar','uses'=>'Admin\UsersController@atualizar']);
Route::get('/admin/Users/deletar/{id}',['as'=>'admin.Users.deletar','uses'=>'Admin\UsersController@deletar']);
