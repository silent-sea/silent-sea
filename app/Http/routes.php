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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'HomeController@index');
    Route::get('/admin/news', 'HomeController@news');

    Route::post('/admin/create/owl', 'AdminController@createOwl');
    Route::post('/admin/delete/owl', 'AdminController@deleteOwl');
    Route::post('/admin/active/owl', 'AdminController@activeOwl');
    //test
});