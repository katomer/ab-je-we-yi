<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',            'ItemsController\ViewController@all');
Route::get('/car',         'ItemsController\ViewController@car');
Route::get('/computer',    'ItemsController\ViewController@computer');
Route::get('/electronics', 'ItemsController\ViewController@electronics');
Route::get('/house',       'ItemsController\ViewController@house');
Route::get('/household',   'ItemsController\ViewController@household');
Route::get('/phone',       'ItemsController\ViewController@phone');
Route::get('/other',       'ItemsController\ViewController@other');

