@extends('layout.main')

@section('title', 'Desafio das viagens')

@section('content')

<div id="search-container" class="col-md-12">
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="data-container" class="col-md-12">
    <h2>Motoristas</h2>
    <p class="subtitle">Veja nossos motoristas</p>
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
    <div id="cards-container" class="row">
        <h2>Proximas viagens</h2>
        <p class="subtitle">Veja as proximas viagens</p>
        @foreach ($travels as $travel)
                <div class="card col-md-3">
                    <img src="/img/viagem_onibus.avif" alt="{{$travel->km_fim}}">
                    <div class="card-body">
                        <h5 class="card-end">Km total {{$travel->km_fim}}</h5>
                        <p class="card-driver">Id motorista {{$travel->motorista_id}}</pc>
                        <p class="card-car">Id Veiculo {{$travel->veiculo_id}}</p>
                        <a href="" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
    </div>
    <div id="cards-container" class="row">
        <h2>Veiculos</h2>
        <p class="subtitle">Veja nossos veiculos</p>
        @foreach ($vehicles as $vehicle)
            <div class="card col-md-3">
                <img src="/img/scudo.jfif" alt="{{$vehicle->model}}">
                <div class="card-body">
                        <h5 class="card-model">{{$vehicle->model}}</h5>
                        <p class="card-year">2017</p>
                        <a href="" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
        @endforeach
    </div>

</div>

@endsection