@extends('layouts.dashboard')
@section('title','Cadastro de Aluno')
@section('content')
    
    <form action="{{route('doSignStudent')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nomeAluno">Nome do Aluno</label>
            <input type="text" class="form-control" id="nomeAluno" name="nomeAluno" placeholder="Insira o nome do aluno a ser cadastrado.">
        </div>
        <div class="form-group">
            <label for="matricula">Matricula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Insira a matricula">
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
            <label for="numero">Numero</label>
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