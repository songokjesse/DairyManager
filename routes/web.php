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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/chart', function (){
    $getProduction = \DB::table('productions')
        ->join('animals','productions.animal_id','=','animals.id')
        ->select(DB::raw('sum(productions.amount)as ProductionAmount'),'animals.name')
        ->groupBy('productions.animal_id')
        ->get();
    return $getProduction;
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('animals', 'AnimalsController');
    Route::resource('production', 'ProductionController');
});