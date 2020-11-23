@extends('layouts.dashboard')
@section('title','Todos alunos')

@section('content')

<div class="container-fluid">

    <form class="form-inline" action="{{route('findCourse')}}" method="POST">
        @csrf
        <input class="form-control mr-sm-2" type="search" name="busca" placeholder="Codigo do curso" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    <br>

    <form class="form-inline" action="{{route('importCourses')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Importar cursos XML</label>
        <input type="file" class="form-control-file" id="file" name="file">
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
    <br>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#CODIGO CURSO</th>
            <th scope="col">NOME</th>
            <th scope="col">ALTERAR</th>
            <th scope="col">EXCLUIR</th>
            </tr>
        </thead>
        <tbody>
         @foreach($courses as $obj)   
          <tr>
            <th scope="row">{{$obj->codigo}}</th>
          <td>{{$obj->nome}}</td>
            
            <form action="{{route('editCourse',$obj->codigo)}}" method="post">
                @csrf
                <td><button type="submit" class="btn btn-warning">EDITAR</button></td>
            </form>   

            <form action="{{route('deleteCourse',$obj->codigo)}}" method="post">
                @csrf
                @method('PUT')
                <td><button type="submit" class="btn btn-danger">EXCLUIR</button>  </td>
            </form>

          </tr>
          @endforeach
        </tbody>
    </table>
    
</div>

@endsection