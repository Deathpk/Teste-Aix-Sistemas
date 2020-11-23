<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courseModel extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['codigo','nome'];
    public $timestamps = false;

    public static function saveCourse($course){

        $courseExists = courseModel::where('codigo','=',$course['codigo'])->exists();
        if($courseExists != true){
            $save = courseModel::insert([
                'codigo'=>$course['codigo'],
                'nome'=>$course['nome']
            ]);
        }
        else{
            $update = courseModel::where('codigo','=',$course['codigo'])->update([
                'codigo'=>$course['codigo'],
                'nome'=>$course['nome']
            ]);
        }
        
    }

    public static function getCourses()
    {
        return courseModel::all();
    }

    public static function updateCourse($course)
    {
        $update = courseModel::where('codigo','=',$course['id'])->update([
            'codigo'=>$course['codCurso'],
            'nome'=>$course['nomeCurso']
        ]);
        if($update){
            return true;
        }
        return false;
    }

    public static function findCourse($id)
    {
        $search = courseModel::where('codigo','=',$id)->get('*');
        if(!empty($search[0])){
            return $search;
        }
        else{
            return false;
        }
    }

    public static function deleteCourse($id)
    {
        $delete = courseModel::where('codigo','=',$id)->delete();
        if($delete){
            return true;
        }
        return false;
    }

}
