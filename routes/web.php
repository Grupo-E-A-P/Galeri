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

Route::get('/', function () {
	return view('welcome');
});

use App\Http\Controllers\ImageController;

Route::get('/home', [ImageController::class, 'index'] )->name('galeri.inicio');

Route::get('/images/create', [ImageController::class, 'create'] );

Route::post('/images', [ImageController::class, 'store'] );

Route::get('/cadastro', function () {
	return view('register');
})->name('galeri.cadastrar');

Route::post('/salvar', function () {
	return "Cadastro realizado com sucesso!";
})->name('galeri.cadastroSalvar');

Route::get('/login', function () {
	return view('login');
});

Route::get('/help', function () {
	return view('help');
});

Route::get('/home/{id}', function ($id) {
	return view('image', ['id' => $id]);
});



//view = helper
