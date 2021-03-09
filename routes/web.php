<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pa');
// });

// Route::get('/welcome', function(){
//     return "que merda estressante";
// });
/*
    RoutRoute::get('/users/{id}/{name}', function ($id, $name) {
        return 'nome do usuario '.$name.' com o '.$id;
    });

Route::get('/acerca', function () {
    return view('paginas.acerca');
});

 */


Route::get('/','App\Http\Controllers\controladorPaginas@index');

Route::get('/acerca','App\Http\Controllers\controladorPaginas@acerca');

Route::get('/servicos','App\Http\Controllers\controladorPaginas@servicos');


// o resource cria todas rotas que precisamos a partir das funcoes que criamos nessa classe
Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::post('posts','App\Http\Controllers\PostsController@store')->name('createForm');
// Route::post('posts','App\Http\Controllers\PostsController@store')->name('editForm');
// Route::get('posts/editar/{id}','App\Http\Controllers\PostsController@edit');