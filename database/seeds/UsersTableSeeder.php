<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	       $dados = [
	       		'name' => "Paulo", 
	       		'email' => "paulinho@gamatel.com.br", 
	       		'password' => bcrypt("1234567") 
	       ]; 
	       if (User::where('email','=',$dados['email'])->count()) {
	       		$usuario = User::where('email','=',$dados['email'])->first();
	       		$usuario->update($dados);
	       } else {
	       		User::create($dados);
	       }
	       
    }
}
