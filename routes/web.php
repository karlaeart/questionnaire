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
    return view('home');
})->name('home');

Route::resource('questions','QuestionController')->only('index', 'create', 'store');

Route::get('question/answers/index', 'AnswerController@index')->name('answers.index');
Route::post('question/{question}/answer', 'AnswerController@create')->name('answers.store');
