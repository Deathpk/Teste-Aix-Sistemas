<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\courseModel;
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
    Route::get('student/signup', function(){
        if (Auth::check()){
            $courses = courseModel::getCourses();
            return view('Students.signUpStudent',['courses'=>$courses]);
        }
        else{
            return redirect('login');
        }
    })->name('studentSignup');
    Route::post('/student/signup','studentController@signUpStudent')->name('doSignStudent');
    Route::get('/student/enroled', 'studentController@showAllStudents')->name('showAllStudents');
    Route::post('/student/{id}/edit', 'studentController@editStudent')->name('editStudent');
    Route::put('student/{id}/update','studentController@updateStudent')->name('updateStudent');
    Route::put('/student/{id}/delete','studentController@deleteStudent')->name('deleteStudent');
    Route::post('/student/search','studentController@findStudent')->name('findStudent');
    
    Route::get('courses/create', function () {
        return view('Courses.createCourse');
    })->name('createCourse');
    Route::post('courses/create', 'courseController@createCourse')->name('createCourse');
    Route::get('courses/avaliable', 'courseController@showAllCourses')->name('showAllCourses');
    Route::post('courses/{id}/edit', function($id){
        return view('Courses.editCourse',['id'=>$id]);
    })->name('editCourse');
    Route::put('courses/{id}/update', 'courseController@updateCourse')->name('updateCourse');
    Route::post('courses/search', 'courseController@findCourse')->name('findCourse');
    Route::put('courses/{id}/delete', 'courseController@deleteCourse')->name('deleteCourse');
    Route::post('courses/import','courseController@importCoursesFromXml')->name('importCourses');
});







