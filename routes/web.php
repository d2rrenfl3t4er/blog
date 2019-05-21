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

// Объявляем маршруты для ресурсного контроллера CommentController,
// назначая слово comments префиксом URI
Route::get('/', function (){
  return view('welcome');
});
Route::resource('comments', 'CommentController');

Route::resource('entries', 'EntryController');

// Т. к. метод remove() не предусмотрен в ресурсных контроллерах,
// объявляем маршрут самостоятельно.
Route::get('comments/{comment}/remove', 'CommentController@remove')
->name('comments.remove');

Route::get('/', function () {
    return view('welcome');
});

  Route::get(
    'entries/{entry}/remove',
    'EntryController@remove'
    )->name('entries.remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
