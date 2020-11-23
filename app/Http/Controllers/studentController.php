<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\studentModel;
use App\Models\courseModel;

class studentController extends Controller
{

    public function signUpStudent(Request $request)
    {
        
        $dataMatricula = date("Y-m-d");
        $signUp = studentModel::saveStudent([
            'matricula'=>$request->matricula,
            'nome'=>$request->nomeAluno,
            'curso'=>$request->curso,
            'turma'=>$request->turma,
            'data_matricula'=>$dataMatricula,
            'cep'=>$request->cep,
            'rua'=>$request->rua,
            'bairro'=>$request->bairro,
            'cidade'=>$request->cidade,
            'numero'=>$request->numero,
            'complemento'=>$request->complemento,
            'estado'=>$request->estado,
            'situacao'=>1
        ]);

        if($signUp == true){
            return redirect()->route('home');
        }
        return redirect()->route('studentSignup');
    }

    public function showAllStudents()
    {
       $students= studentModel::getAllStudents();
       if($students != null){
         return view('Students.showStudents',['students'=>$students]);
       }
       return redirect()->route('home');
       
    }

    public function editStudent($id)
    {
        $courses = courseModel::getCourses();
        return view('Students.editStudent',['id'=>$id,'courses'=>$courses]);

    }

    public function updateStudent($id, Request $request)
    {
        $request->merge(['id'=>$id]);
        // dd($request);
        $updateStudent = studentModel::updateStudent($request);
        if($updateStudent == true){
            return $this->showAllStudents();
        }
        return redirect()->route('home'); // retornar para view showStudents mostrando um erro.
    }

    public function deleteStudent($id)
    {
        $deleteStudent = studentModel::deleteStudent($id);
        $students= studentModel::getAllStudents();

        if($deleteStudent == true){
            return view('Students.showStudents',['students'=>$students]);
        }
        return redirect()->route('home'); // retornar para view showStudents mostrando um erro.
    }

    public function findStudent(Request $request)
    {
        $search = studentModel::findStudent($request['busca']);
        
        if($search != false){
            return view('Students.showStudents',['students'=>$search]);
        }
        else{
            $students= studentModel::getAllStudents();
            return view('Students.showStudents',['students'=>$students]); // retornar para view com erro.
        }
    }
    
}
