@extends('layouts.dashboard')
@section('title','Dashboard')
@section('content')

<div class="container">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Seja bem vindo a AIX Sistemas</h1>
          <p class="lead">Com mais de 29 anos de experiência no desenvolvimento de soluções em tecnologia para a gestão do ensino,
             a missão da AIX Sistemas é contribuir para melhoria do desempenho da educação brasileira,
              auxiliando educadores a extraírem o maior valor da tecnologia.
          </p>
        </div>
    </div>
    <br>
    <div class="card">
        <h5 class="card-header">Dashboard</h5>
        <div class="card-body">
        <h3 class="card-title">Total de alunos matriculados: {{$students}}</h3>
            <br>
        <h3 class="card-title">Total de disciplinas cadastradas: {{$courses}}</h3>
        </div>
    </div>
    
    
</div>
   
@endsection