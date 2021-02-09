<?php

use Illuminate\Support\Facades\Route;



Route::post('/news/article','App\Http\Controllers\ArticleController@submit')->name('create_article');

Route::get('/','App\Http\Controllers\ArticleController@allArticle')->name('home');

Route::get('/news','App\Http\Controllers\ArticleController@mainArticle')->name('news');


