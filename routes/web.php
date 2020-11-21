<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

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
    return view('auth.login');
});
Auth::routes();

Route::prefix('admin')->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/student/signup', 'studentController@showSignUpForm')->name('studentSignup');
    Route::post('/student/signup','studentController@signUpStudent')->name('doSignStudent');
    Route::get('/student/enroled', 'studentController@showAllStudents')->name('showAllStudents');
    Route::post('/student/{id}/edit', 'studentController@editStudent')->name('editStudent');
    Route::put('student/{id}/update','studentController@updateStudent')->name('updateStudent');
});







