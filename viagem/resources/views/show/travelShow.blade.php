@extends('layout.main')

@section('title', 'Viagem')

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/travel/{{$travel->image}}" class="img-fluid" alt="{{$travel->km_fim}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1><ion-icon name="map-outline"></ion-icon> {{$travel->origem}} -> {{$travel->destino}}</h1>
                <p class="travel-driver"><ion-icon name="person-outline"></ion-icon> {{$travel->motorista_id}}</p>
                <p class="travel-car"><ion-icon name="bus-outline"></ion-icon> {{$travel->veiculo_id}}</p>
            </div>
        </div>
    </div>
    
@endsection