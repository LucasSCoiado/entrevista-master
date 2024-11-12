@extends('layout.main')

@section('title', 'Desafio das viagens')

@section('content')

<div id="search-container" class="col-md-12">
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        
    </form>
</div>

<div id="data-container" class="col-md-12">  
    @if ($search)
        <h2>Buscando por: {{$search}}</h2>
    @elseif (count($vehicles)==0 || count($travels)==0 || count($drivers)==0)
        <p>Sem dados encontrados</p>
    @endif  
    <p class="subtitle">Veja nossos motoristas</p>
    <div id="cards-container" class="row">
        @foreach ($drivers as $driver)
            <div class="card col-md-3">
                <img src="/img/driver/{{$driver->image}}" alt="{{$driver->name}}">
                <div class="card-body">
                    <h5 class="card-name">{{$driver->name}}</h5>
                    <p class="card-date">{{(date('d/m/Y', strtotime($driver->birth)))}}</p>
                    <p class="card-cnh">{{$driver->cnh}}</p>
                    <a href="/driverShow/{{$driver->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
    <div id="cards-container" class="row">
        
        <p class="subtitle">Veja as proximas viagens</p>
        @foreach ($travels as $travel)
                <div class="card col-md-3">
                    <img src="/img/travel/{{$travel->image}}" alt="{{$travel->km_fim}}">
                    <div class="card-body">
                        <h5 class="card-end">Km total {{$travel->km_fim}}</h5>
                        <p class="card-travel">Origem: {{$travel->origem}}</pc>
                        <p class="card-travel">Destino: {{$travel->destino}}</p>
                        <a href="/travelShow/{{$travel->id}}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
        @endforeach
    </div>
    <div id="cards-container" class="row">
       
        <p class="subtitle">Veja nossos veiculos</p>
        @foreach ($vehicles as $vehicle)
            <div class="card col-md-3">
                <img src="/img/vehicle/{{$vehicle->image}}" alt="{{$vehicle->carModel}}">
                <div class="card-body">
                        <h5 class="card-model">{{$vehicle->carModel}}</h5>
                        <p class="card-year">{{(date('d/m/Y', strtotime($vehicle->year)))}}</p>
                        <a href="/vehicleShow/{{$vehicle->id}}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
        @endforeach
    </div>

</div>

@endsection