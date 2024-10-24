@extends('layout.main')

@section('title', 'Motoristas')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse" id="navbar-secondary">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/register/driverRegister" class="nav-link register"> <ion-icon name="accessibility-outline"></ion-icon>
                Cadastro Motoristas</a>
            </li>
        </ul>
    </div>
</nav>

<div id="data-container" class="col-md-12">
    <h1>Pagina de Motoristas</h1>
    <div id="cards-container" class="row">
        @foreach ($drivers as $driver)
            <div class="card col-md-3">
                <img src="/img/funcionario.png" alt="{{$driver->name}}">
                <div class="card-body">
                    <h5 class="card-name">{{$driver->name}}</h5>
                    <p class="card-date">10/10/2024</p>
                    <p class="card-cnh">{{$driver->cnh}}</p>
                    <a href="" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection