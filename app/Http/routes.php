<?php

use App\Owl;

Route::get('/', function () {

    $year = Carbon\Carbon::now();
    $year = $year->year;
    $owl = Owl::all()->where('active', 1);

    return view('welcome')
        ->with('year', $year)
        ->with('owl', $owl);
});

Route::get('/news/{id}', 'NewsController@show');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/news', 'NewsController@index');

    Route::post('/admin/create/owl', 'AdminController@createOwl');
    Route::post('/admin/delete/owl', 'AdminController@deleteOwl');
    Route::post('/admin/active/owl', 'AdminController@activeOwl');
    Route::post('/admin/create/news', 'NewsController@create');
    //test
});