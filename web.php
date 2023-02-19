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

Route::get('/articles/{article}', function ($article) {
    return view('index' , [
        'title' => $article,
        'status' => true,
        'articles' => [
            'article 1',
            'article 2'
        ]
    ]);
});

Route::get('/mahshid', function () {
    return 'hii mahshiiid';
});
