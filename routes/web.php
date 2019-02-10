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
})->name('homepage');

//Responde a la petición http://tarea2.test/players
Route::get('/players', 'PlayersController@index')->name('players.index');
Route::get('/players/create', 'PlayersController@create')->name('players.create');
Route::post('/players', 'PlayersController@store')->name('players.store');

//Responde a la petición http://tarea2.test/jobs
Route::get('/jobs', 'JobsController@index')->name('jobs.index');
Route::get('/jobs/create', 'JobsController@create')->name('jobs.create');
Route::post('/jobs', 'JobsController@store')->name('jobs.store');

//Responde a la petición http://tarea2.test/inventory
Route::get('/inventory', 'InventoryController@index')->name('inventory.index');
Route::get('/inventory/create', 'InventoryController@create')->name('inventory.create');
Route::post('/inventory', 'InventoryController@store')->name('inventory.store');

//Responde a la petición http://tarea2.test/items
Route::get('/items', 'ItemsController@index')->name('items.index');
Route::get('/items/create', 'ItemsController@create')->name('items.create');
Route::post('/items', 'ItemsController@store')->name('items.store');