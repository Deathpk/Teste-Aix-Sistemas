@extends('layouts.dashboard')
@section('title','Todos alunos')

@section('content')

<div class="container-fluid">

  <form class="form-inline" action="{{route('findStudent')}}" method="POST">
    @csrf
    <input class="form-control mr-sm-2" type="search" name="busca" placeholder="Matricula do aluno" aria-label="Search">
    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
  </form>
  <br>

    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#MATRICULA</th>
            <th scope="col">NOME</th>
            <th scope="col">SITUAÇÃO</th>
            <th scope="col">CURSO</th>
            <th scope="col">TURMA</th>
            <th scope="col">DATA MATRICULA</th>
            <th scope="col">CEP</th>
            <th scope="col">RUA</th>
            <th scope="col">CIDADE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">BAIRRO</th>
            <th scope="col">NUMERO</th>
            <th scope="col">COMPLEMENTO</th>
            <th scope="col">ALTERAR</th>
            <th scope="col">EXCLUIR</th>
          </tr>
        </thead>
        <tbody>
         @foreach($students as $obj)   
          <tr>
            <th scope="row">{{$obj->matricula}}</th>
          <td>{{$obj->nome}}</td>
          @if($obj->situacao == 1)
            <td>Ativo</td>
          @else
            <td>Inativo</td>
          @endif
          <td>{{$obj->curso}}</td>
          <td>{{$obj->turma}}</td>
          <td>{{$obj->data_matricula}}</td>  
          <td>{{$obj->cep}}</td>
            <td>{{$obj->rua}}</td>
            <td>{{$obj->cidade}}</td>
            <td>{{$obj->estado}}</td>
            <td>{{$obj->bairro}}</td>
            <td>{{$obj->numero}}</td>
            <td>{{$obj->complemento}}</td>
            
            <form action="{{route('editStudent',$obj->matricula)}}" method="post">
                @csrf
                <td><button type="submit" class="btn btn-warning">EDITAR</button></td>
            </form>   

            <form action="{{route('deleteStudent',$obj->matricula)}}" method="post">
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