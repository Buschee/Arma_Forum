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
Route::get('beitraege', 'BeitraegeController@index')->name('beitraege.index');
Route::get('beitraege/create', 'BeitraegeController@create')->name('beitraege.create');
Route::post('beitraege', 'BeitraegeController@store')->name('beitraege.store');
Route::get('beitraege/{beitrag}', 'BeitraegeController@show')->name('beitraege.show');
Route::get('beitraege/edit/{beitrag}', 'BeitraegeController@edit')->name('beitraege.edit');
Route::patch('beitraege/update/{beitrag}', 'BeitraegeController@update')->name('beitraege.update');
Route::delete('beitraege/delete/{beitrag}', 'BeitraegeController@destroy')->name('beitraege.destroy');