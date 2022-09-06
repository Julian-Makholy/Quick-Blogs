<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('blogs','App\Http\Controllers\BlogController');

Route::get('/search', 'App\Http\Controllers\BlogController@search');

Route::get('blog/soft/delete/{id}', 'App\Http\Controllers\BlogController@softDelete')
->name('soft.delete');

Route::get('blog/trash', 'App\Http\Controllers\BlogController@trashedBlogs')
->name('blog.trash');

Route::get('blog/back/from/trash/{id}', 'App\Http\Controllers\BlogController@backFromSoftDelete')
->name('blog.back.from.trash');

Route::get('blog/delete/from/database/{id}', 'App\Http\Controllers\BlogController@deleteForEver')
->name('blog.delete.from.database');




