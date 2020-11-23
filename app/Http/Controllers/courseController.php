<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courseModel;

class courseController extends Controller
{

    public function createCourse(Request $request)
    {
        $courseCreate = courseModel::saveCourse([
            'codigo'=> $request['codCurso'],
            'nome'=> $request['nomeCurso']
        ]);
        return $this->showAllCourses();
    }

    public function importCoursesFromXml(Request $request)
    {
        if($request->hasFile('file') && $request->file('file')->isValid()){
            $ext = $request->file->extension();
            if($ext == 'xml'){
                $xml = simplexml_load_file($request->file);
                foreach($xml->curso as $xml){
                    courseModel::saveCourse(['codigo'=>$xml->codigo , 'nome'=>$xml->nome]);
                }
                return $this->showAllCourses();
            }
            else{
                $courses = courseModel::getCourses();
                return view('Courses.showCourses',['courses'=>$courses]); // retornar erro...
            }
        }
    }

    public function showAllCourses()
    {
        $courses = courseModel::getCourses();
        return view('Courses.showCourses',['courses'=>$courses]);
    }

    public function updateCourse($id,Request $request)
    {
        $request->merge(['id'=>$id]);
        $update = courseModel::updateCourse($request);
        if($update != false){
            return $this->showAllCourses();
        }
        else{
            return $this->showAllCourses(); // voltar erro depois...
        }
    }

    public function findCourse(Request $request)
    {   
        $search = courseModel::findCourse($request['busca']);
        if($search != false){
            return view('Courses.showCourses',['courses'=>$search]);
        }
        return $this->showAllCourses(); // retornar erro...
    }

    public function deleteCourse($id)
    {
        $delete = courseModel::deleteCourse($id);
        if($delete != false){
            $this->showAllCourses();
        }
        return $this->showAllCourses(); // retornar com erro...
    }   
    
}
