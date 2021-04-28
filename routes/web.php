<?php

use Illuminate\Support\Facades\Route;

// 🔍 Redirects '/' to '/cats'
Route::redirect('/', '/cats');

/***************
 \
 \ 🎩 In a general CRUDful application, there are 7 general actions to use from
 \
 \ Index            GET             /cats
 \ Create           GET             /cats/create
 \ Insert           POST            /cats
 \ Show             GET             /cats/{id} 📝 Just to note: Our app does not utilize show!
 \ Edit             GET             /cats/{id}/edit
 \ Update           PUT             /cats/{id}
 \ Delete           DELETE          /cats/{id}
 \ 
 **************/

/*
Route::get('/cats',             'CatController@index');
Route::get('/cats/create',      'CatController@create');
Route::post('/cats',            'CatController@store');
Route::get('/cats/{id}',        'CatController@show');
Route::get('/cats/{id}/edit',   'CatController@edit');
Route::put('/cats/{id}',        'CatController@update');
Route::delete('/cats/{id}',     'CatController@delete');
*/

// OR

Route::resource('cats', 'CatController');
// Because imagine if there's 10++ models, with middlewares, etc
// 🔗 https://laravel.com/docs/6.x/controllers#resource-controllers