@extends('layouts.dashboard')
@section('title','Atualizar Cadastro')
@section('content')
    
    <form action="{{route('updateStudent', $id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomeAluno">Nome do Aluno</label>
            <input type="text" class="form-control" id="nomeAluno" name="nomeAluno" placeholder="Insira o nome do aluno a ser cadastrado.">
        </div>
        <div class="form-group">
            <label for="situacao">Situação</label>
            <select class="form-control" id="situacao" name="situacao">
                <option  value="null" selected>Escolha a Situação do aluno</option>
                <option  value="1">Ativo</option>
                <option  value="0">Inativo</option>
            </select>    
        </div>
        <div class="form-group">
            <label for="matricula">Curso</label>
            <select class="form-control" id="curso" name="curso">
                @foreach($courses as $obj)
                 <option  value="{{$obj->codigo}}" selected>{{$obj->nome}}</option>
                @endforeach
                <option  value="null" selected>Escolha um curso</option>
            </select>    
        </div>

        <div class="form-group">
            <label for="turma">Turma</label>
            <input type="text" class="form-control" id="turma" name="turma" placeholder="Insira a turma">
        </div>
        
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="number" class="form-control" id="cep" name="cep" placeholder="Insira o CEP">
        </div>
        <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="Insira a rua">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Insira o bairro">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Insira a cidade">
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" class="form-control" id="numero" name="numero" placeholder="Insira o numero">
        </div>
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Insira o complemento">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado">
                <option  value="null" selected>Escolha um estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

@endsection