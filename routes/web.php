<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

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

// localhost:8000/

// Route::get('/', function () {
//     return view('welcome');
// });

// //página inicial das tarefas
// Route::get('/tarefas/criar', function () {

// 	//implementação da ação associada a /tarefas
// 	//funcionalidade

// 	//pegar dados no BD

// 	//template + dados
// 	return view('tarefas.create');
// });

// Route::get('/tarefas', function () {
// 	return view('tarefas.home');
// });

// Route::post('/tarefas/salvar', function (Request $request) {
// 	$name = $request->post('descricao');

// 	return "Registro salvo";
// })->name('tarefas.salvar');


Route::get('/', function () {
	return view('bemvindo.index');
});

Route::get('/home', function () {
	return view('inicio.index');
});

Route::get('/cadastro', function () {
	return view('cadastro.index');
});

Route::get('/login', function () {
	return view('login.index');
});

Route::get('/help', function () {
	return view('ajuda.index');
});



//view = helper
