@extends('layouts.dashboard')
@section('title','Cadastrar Curso')
@section('content')
    <form action="{{route('createCourse')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codCurso">Codigo do Curso</label>
            <input type="text" class="form-control" id="codCurso" name="codCurso" placeholder="Insira o código do curso">
        </div>
        <div class="form-group">
            <label for="nomeCurso">Nome do Curso</label>
            <input type="text" class="form-control" id="nomeCurso" name="nomeCurso" placeholder="Insira o nome do curso a ser cadastrado.">
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection