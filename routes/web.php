<?php

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
//home

Route::get('/','SiteView@index');
Route::get('/blog','SiteView@blog');

//auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Caegory

Route::get('/category/add-category', 'CategoryController@index');
Route::post('/category/new-category', 'CategoryController@saveCategoryInfo');
Route::get('/category/manage-category', 'CategoryController@manageCategory');
Route::get('/category/unpublished-category/{id}', 'CategoryController@unpublishedcategory');
Route::get('/category/published-category/{id}', 'CategoryController@publishedcategory');
Route::get('/category/edit-category/{id}', 'CategoryController@editcategory');
Route::post('/category/update-category', 'CategoryController@updateCategory');
Route::get('/category/deletecategory/{id}', 'CategoryController@deletcategory');



//BLOG

Route::get('/blog/add-blog', 'BlogController@index');
Route::post('/blog/new-blog', 'BlogController@saveBlogInfo');
Route::get('/blog/manage-blog', 'BlogController@manageBlog');
Route::get('/blog/unpublished-blog/{id}', 'BlogController@unpublishedblog');
Route::get('/blog/published-blog/{id}', 'BlogController@publishedblog');
Route::get('/blog/edit-blog/{id}', 'BlogController@editblog');
Route::post('/blog/update-blog', 'BlogController@updateblog');
Route::get('/blog/deleteblog/{id}', 'BlogController@deleteblog');


Route::get('/blog/readblog', 'BlogController@readblog');
