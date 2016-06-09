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
Route::get('articles/create','PagesController@showPostArticle');
//create article
Route::post('articles/create','PagesController@createArticle');

//show article edit page based on article ID
Route::get('articles/edit/{id}','PagesController@showEditArticle');
//handle article edit action
Route::post('articles/edit','PagesController@editArticle');

//show all articles
Route::get('articles','PagesController@showArticlesList');
//show specific article based on article ID
Route::get('articles/{id}','PagesController@showArticle');
//show article list based on category and sub category
Route::get('articles/{category}/{sub_cate}','PagesController@showArticlesListByCategory');

