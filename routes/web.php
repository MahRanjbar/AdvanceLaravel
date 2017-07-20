<?php


use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;
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

Route::get('/',['as'=>'Home','uses'=> 'PageController@home']);

// Route::get('/', function(){
	// return view('welcome');

	// Redis::set('name','Test');
	// return Redis::get('name');
	
	// Cache::put('name','ehsan',1);
	// return Cache::get('name');
// });



Route::group(['middleware' => ['web']],function(){

	Route::get('cards','CardsController@index');
	Route::get('cards/{id}','CardsController@show');
	Route::post('cards/{id}/notes','NotesController@store');

	Route::get('note/{note}/edit','NotesController@edit'); // Edit page
	Route::patch('notes/{note}','NotesController@update'); // Update note

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
