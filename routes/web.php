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

Route::get('/', function () {
    return view('welcome');
});

//タスク一覧画面へのルーティング
Route::get('/tasks',[App\Http\Controllers\TaskController::class,'index'])->name('tasks');

//タスク登録へのルーティング
Route::post('/task',[App\Http\Controllers\TaskController::class,'store'])->name('task');

//タスク削除へのルーティング
Route::delete('/task/{task}',[App\Http\Controllers\TaskController::class,'destroy'])->name('/task/{task}');


//Route::get('hello','App\Http\Controllers\HelloController@index');

//Route::get('hello/other', 'App\Http\Controllers\HelloController@other');

//Route::get('/hello/{id?}/{pass?}','App\Http\Controllers\HelloController@index');

Route::get('hello','App\Http\Controllers\HelloController@index');

//Route::post('hello','App\Http\Controllers\HelloController@post');

//Route::get('/hello',[App\Http\Controllers\HelloController::class,'index']);　よく使われる

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
