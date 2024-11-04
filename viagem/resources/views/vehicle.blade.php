@extends('layout.main')

@section('title', 'Veiculos')

@section('content')

<div id="navbar navbar-expand-lg navbar-light center">
    <nav class="navbar-secondary navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar-secondary">
            <ul class="navbar-nav-secondary">
                <li class="nav-item">
                    <a href="/register/vehicleRegister" class="nav-link register"><ion-icon name="car-outline"></ion-icon>
                    Cadastro de veiculos</a>
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
    <h1>Veiculos</h1>
    <div id="cards-container" class="row">
        <h2>Veiculos</h2>
        @foreach ($vehicles as $vehicle)
            <div class="card col-md-3">
                <img src="/img/vehicle/{{$vehicle->image}}" alt="{{$vehicle->carModel}}">
                <div class="card-body">
                        <h5 class="card-model">{{$vehicle->carModel}}</h5>
                        <p class="card-year">2017</p>
                        <a href="/vehicleShow/{{$vehicle->id}}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
        @endforeach
    </div>
</div>

@endsection