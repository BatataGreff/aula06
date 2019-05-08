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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/atividades/create', 'AtividadeController@create');
Route::get('/atividades', 'AtividadeController@index');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::post('/atividades', 'AtividadeController@store');

Route::get('/mensagens', 'MensagemController@index');
Route::get('/mensagens/create', 'MensagemController@create');
Route::get('/mensagens/{id}', 'MensagemController@show');
Route::post('/mensagens', 'MensagemController@store');









//php artisan key:generate
//composer dump-autoload
//php artisan migrate --seed