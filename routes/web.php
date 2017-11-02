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
Route::get('/', 'RestartController@index'); 

//Route::get('/', 'RestartController@index');

Route::get('game/{id}/drop/{column}', 'gameController@drop');


Route::get('game/{id}', 'GameController@game')->name('game');
  


Route::get('/restart', 'GameController@restart')->name('restart');





