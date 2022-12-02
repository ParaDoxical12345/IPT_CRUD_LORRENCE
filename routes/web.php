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



Route::get('/', 'VenueController@index');
Route::get('/sub-edit/{venue}', 'VenueController@subedit');
Route::get('/venues/confirm', 'VenueController@subconfirm');

Route::get('/venue/create', 'VenueController@create');
Route::post('/venue/create', 'VenueController@store');


Route::get('/edit-venue/{venue}','VenueController@edit');
Route::put('/edit-venue/{venue}', 'VenueController@update');
Route::get('/delete-confirm/{venue}', 'VenueController@confirm');
Route::delete('/delete-venue/{venue}', 'VenueController@delete');

