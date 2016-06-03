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

Route::get('/', function () {
    return view('welcome');
});

//show main page
Route::get('main','PagesController@showMainPage');
//show post article page
Route::get('post-article','PagesController@showPostArticle');
//create article
Route::post('post-article','PagesController@createArticle');
//show all articles based on PHP sub-category
//Route::get('php/{subcategory}','');
