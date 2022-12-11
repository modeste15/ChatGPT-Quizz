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

Route::get('/', 'App\Http\Controllers\QuizController@index')->name('quiz.index');

Route::post('/check-answer', 'App\Http\Controllers\QuizController@checkAnswer')->name('quiz.checkAnswer');