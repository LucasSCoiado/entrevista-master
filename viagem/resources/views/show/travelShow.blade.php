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
                <p class="travel-driver"><ion-icon name="person-outline"></ion-icon> {{$travelOwner['name']}}</p>
                <p class="travel-car"><ion-icon name="bus-outline"></ion-icon> {{$vehicleOwner['carModel']}}</p>
                <p class="card-travel"><ion-icon name="globe-outline"></ion-icon> Origem: {{$travel->origem}}</pc>
                <p class="card-travel"><ion-icon name="globe-outline"></ion-icon> Destino: {{$travel->destino}}</p>
            </div>
        </div>
        <td>
            <a href="/viagem/travelEdit/{{$travel->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
            <form action="/viagem/{{$travel->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
            </form>
        </td>
    </div>
    
@endsection