<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\studentModel;

class studentController extends Controller
{

    public function showSignUpForm(Request $request)
    {
        if (Auth::check()){
            return view('Students.signUpStudent');
        }
        else{
            return redirect('login');
        }
    }

    public function signUpStudent(Request $request)
    {
        
        $signUp = studentModel::saveStudent([
            'matricula'=>$request->matricula,
            'nome'=>$request->nomeAluno,
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

    public function showAllStudents(Request $request)
    {
       $students= studentModel::getAllStudents();
       if($students != null){
         return view('Students.showStudents',['students'=>$students]);
       }
       return redirect()->route('home');
       
    }

    public function editStudent($id)
    {
        return view('Students.editStudent',['id'=>$id]);

    }

    public function updateStudent($id, Request $request)
    {
        $request->merge(['id'=>$id]);
        $updateStudent = studentModel::updateStudent($request);
        $students= studentModel::getAllStudents();

        if($updateStudent == true){
            return view('Students.showStudents',['students'=>$students]);
        }
        return redirect()->route('home'); // retornar para view showStudents mostrando um erro.
    }

    public function deleteStudent(Request $request)
    {

    }
    
}
