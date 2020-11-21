@extends('layouts.dashboard')
@section('title','Todos alunos')

@section('content')

<div class="container">
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#MATRICULA</th>
            <th scope="col">NOME</th>
            <th scope="col">SITUAÇÃO</th>
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
          <td>{{$obj->situacao}}</td>
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

            {{-- <form action="{{route('deletaAssociado',$obj->id)}}" method="post"> --}}
                {{-- @csrf --}}
                {{-- @method('PUT') --}}
                <td><button type="submit" class="btn btn-danger">EXCLUIR</button>  </td>
            {{-- </form> --}}

          </tr>
          @endforeach
        </tbody>
      </table>
    
</div>

@endsection