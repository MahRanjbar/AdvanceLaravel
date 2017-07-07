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

Route::get('cards','CardsController@index');
Route::get('cards/{id}','CardsController@show');
Route::post('cards/{id}/notes','NotesController@store');

Route::get('note/{note}/edit','NotesController@edit'); // Edit page
Route::patch('notes/{note}','NotesController@update'); // Update note
