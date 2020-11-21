<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['matricula','nome','cep','rua','bairro','cidade','numero','complemento','estado','situacao'];
    public $timestamps = false;

    public static function saveStudent($student)
    {
        $save =  studentModel::insert([
           'matricula'=>$student['matricula'],
           'nome'=>$student['nome'],
           'cep'=>$student['cep'],
           'rua'=>$student['rua'],
           'bairro'=>$student['bairro'],
           'cidade'=>$student['cidade'],
           'numero'=>$student['numero'],
           'complemento'=>$student['complemento'],
           'estado'=>$student['estado'],
           'situacao'=>$student['situacao'],
        ]);

        if ($save){
            return true;
        }
        return false;
    }

    public static function updateStudent($student)
    {
        // dd($student);
        $update = studentModel::where('matricula','=',$student['id'])->update([
            'nome'=>$student['nomeAluno'],
            'cep'=>$student['cep'],
            'rua'=>$student['rua'],
           'bairro'=>$student['bairro'],
           'cidade'=>$student['cidade'],
           'numero'=>$student['numero'],
           'complemento'=>$student['complemento'],
           'estado'=>$student['estado'],
           'situacao'=>$student['situacao']
        ]);

        if($update){
            return true;
        }
        return false;
    }

    public static function getAllStudents()
    {
        return studentModel::all();
    }

}
