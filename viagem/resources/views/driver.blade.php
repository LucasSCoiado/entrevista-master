@extends('layout.main')

@section('title', 'Motoristas')

@section('content')


<div id="navbar navbar-expand-lg navbar-light center">
    <nav class="navbar-secondary navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar-secondary">
            <ul class="navbar-nav-secondary">
                <li class="nav-item">
                    <a href="/register/driverRegister" class="nav-link register"><ion-icon name="accessibility-outline"></ion-icon>
                    Cadastro de motoristas</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<main>
    <div class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
            @yield('content')
        </div>
    </div>
    
</main>
<div id="data-container" class="col-md-12">
    <h1>Pagina de Motoristas</h1>
    <div id="cards-container" class="row">
        @foreach ($drivers as $driver)
            <div class="card col-md-3">
                <img src="/img/driver/{{$driver->image }}" alt="{{$driver->name}}">
                <div class="card-body">
                    <h5 class="card-name">{{$driver->name}}</h5>
                    <p class="card-date">10/10/2024</p>
                    <p class="card-cnh">{{$driver->cnh}}</p>
                    <a href="/driverShow/{{$driver->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
        @if (count($driver) == 0)
            <p>Estamos sem motoristas</p>
        @endif
    </div>
</div>
@endsection