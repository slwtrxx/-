<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//get - данный метод отвечает за переход на нужную страницу!
Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');
// Так как отправляем данные из формы используем метод post
Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');
//127/about/11/category/1212/Alex - мы не можем писать таким образом review_check
//Route::get('/user/{id}/{name} - пишем так - это динамичный способ

/*Route::get('/user/{id}/{name}', function ($id, $name) {
    return  'ID: ' .$id. ' . Name:' .$name;
});
*/
