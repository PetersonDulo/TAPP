<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/faco', function(){
//     // return[
//     //     'Primeiro',
//     //     'Segundo',
//     //     'Terceiro'
//     // ];
// });

// //cria
// Route::post('/faco', function () {
    
// });

//atualiza
// Route::put('/faco/{id}',function(){

// });

//apaga
// Route::delete('/faco/{id}',function(){
    
// });

//logs
// Route::get('/tutorials/{slug}',function($slug){
//     //vai capturar o post a partir da base de dados
    
//     //retorna o post para o usuario numa view
//     return $slug;
// });