<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- SCRIPTS -->
        <script type="text/javascript" src="<?php echo asset('js/script.js')?>"></script>
        <!-- STYLES -->
        <link rel="stylesheet" href="{{asset('css/navbar.css')}}">

    </head>

    <body>
        <!-- NAVBAR -->
        
            <div class="container">
                <div class="container-lg">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="#">Sistema de Ensino Aix</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                            <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="cursos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Cursos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="cursos">
                                    <a class="dropdown-item" href="{{route('createCourse')}}">Cadastrar Curso</a>
                                    <a class="dropdown-item" href="{{route('showAllCourses')}}">Todos Cursos</a>
                                </div>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="alunos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Alunos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="alunos">
                                    <a class="dropdown-item" href="{{route('showAllStudents')}}">Todos Alunos</a>
                                    <a class="dropdown-item" href="{{route('studentSignup')}}">Cadastrar aluno</a>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout <span class="sr-only">(current)</span></a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            
                        </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- MAIN -->
            <div class="container-fluid">
                <br>
                <br>
                @yield('content')
            </div>
            
        
    </body>

</html>