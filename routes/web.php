<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
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
/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return '<h1> A primeira lógica com laravel </h1>';
});

Route::get('/outra', function () {
    return '<h1>Outra lógica com Laravel</h1>';
});
*/
// versão no PHP 7.4 >=

Route::get('/produtos',[ProdutoController::class,'lista']);
Route::get('/produtos/mostra/{id}',[ProdutoController::class,'mostra'])->where('id','[0-9]+'); // o metódo where está definindo que meu parametro id só pode ser passado npumeros através da expressaão regular [0-9]+
Route::get('/produtos/novo',[ProdutoController::class,'novo']);
Route::post('/produtos/adiciona',[ProdutoController::class,'adiciona']);
Route::get('/produtos/json', [ProdutoController::class,'listaJson']);
Route::get('/produtos/remove/{id}',[ProdutoController::class,'remove']);
Route::get('/produtos/edit/{id}',[ProdutoController::class,'edit']);
Route::put('/produtos/update/{id}',[ProdutoController::class,'update']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

