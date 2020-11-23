<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\courseModel;

class studentModel extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['matricula','nome','curso','turma','data_matricula','cep','rua','bairro','cidade','numero','complemento','estado','situacao'];
    public $timestamps = false;

    public static function saveStudent($student)
    {
        $save =  studentModel::insert([
           'matricula'=>$student['matricula'],
           'nome'=>$student['nome'],
           'curso'=>$student['curso'],
            'turma'=>$student['turma'],
            'data_matricula'=>$student['data_matricula'],
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
        $update = studentModel::where('matricula','=',$student['id'])->update([
            'nome'=>$student['nomeAluno'],
            'curso'=>$student['curso'],
            'turma'=>$student['turma'],
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

    public static function deleteStudent($id)
    {
        $delete = studentModel::where('matricula','=',$id)->delete();

        if($delete){
            return true;
        }
        return false;
    }

    public static function getAllStudents()
    {
        $students =  studentModel::all();
        foreach($students as $obj=> $key){
            $courseDescription = courseModel::where('codigo','=',$key['curso'])->first('nome');
            $students[$obj]['curso'] = $courseDescription['nome'];
        }
        return $students;
    }

    public static function findStudent($id)
    {
        $search =  studentModel::where('matricula','=',$id)->get('*');
        
        if(!empty($search[0])){
            return $search;
        }
        else{
            return false;
        }
        
    }

}
