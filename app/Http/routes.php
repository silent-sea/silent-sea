<?php

use App\Owl;
use App\News;
use App\Triplet;

Route::get('/', function () {

    $year = Carbon\Carbon::now();
    $year = $year->year;
    $owl = Owl::all()->where('active', 1);
    $news = News::all();
    $latestnews = News::orderBy('created_at', 'desc')->first();
    $triplets = Triplet::all();

    return view('welcome')
        ->with('year', $year)
        ->with('owl', $owl)
        ->with('news', $news)
        ->with('latestnews', $latestnews)
        ->with('triplets', $triplets);
});

Route::get('/news/{id}', 'NewsController@show');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/news', 'NewsController@index');
    Route::get('/admin/triplets', 'TripletController@index');

    Route::post('/admin/create/owl', 'AdminController@createOwl');
    Route::post('/admin/delete/owl', 'AdminController@deleteOwl');
    Route::post('/admin/active/owl', 'AdminController@activeOwl');

    Route::post('/admin/create/news', 'NewsController@create');

    Route::post('/admin/create/triplet', 'TripletController@create');
    Route::post('/admin/update/triplet', 'TripletController@update');
});