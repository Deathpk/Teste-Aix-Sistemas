<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\courseModel;
use App\Models\studentModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            $students = studentModel::getAllStudents();
            $studentsQuantity = count($students);
            $courses = courseModel::getCourses();
            $coursesQuantity = count($courses);
            // dd($studentsQuantity);
            return view('dashboard',['students'=>$studentsQuantity,'courses'=>$coursesQuantity]);
        }
        else{
            return view('login');
        }
    }
}
