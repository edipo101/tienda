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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/productos/buscar', 'ProductController@search')->name('products.search');
Route::get('/productos/detalle', 'ProductController@details')->name('products.details');

// Animes web
Route::get('/animes/todos', 'AnimeController@show_all')->name('animes.all');
Route::get('/animes/estreno', 'AnimeController@show_premiere')->name('animes.premiere');
Route::get('/animes/audio/{audio}', 'AnimeController@audio')->name('animes.audio');
Route::get('/animes/detalle/{slug}', 'AnimeController@details')->name('animes.details');
Route::get('/animes/categoria/{slug}', 'AnimeController@by_category')->name('animes.by_category');

Route::get('/articulos/todos', 'ArticleController@show_all')->name('articles.all');

Route::get('/animes', 'AnimeController@index')->name('animes.index');
Route::get('/animes/create', 'AnimeController@create')->name('animes.create');
Route::get('/animes/{slug}/edit', 'AnimeController@edit')->name('animes.edit');
Route::post('/animes', 'AnimeController@store')->name('animes.store');
Route::patch('/animes/{id}', 'AnimeController@update')->name('animes.update');
Route::get('/animes/{slug}', 'AnimeController@show')->name('animes.show');

Route::get('/admin', 'HomeController@admin_home')->name('admin.home');
Route::get('/admin/animes', 'AnimeController@index')->name('admin.index');
Route::get('/admin/anime/{slug}', 'AnimeController@show')->name('admin.show');

// Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
// Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
// Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::get('/portafolio/{id}', 'ProjectController@show')->name('projects.show');
// Route::delete('portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
