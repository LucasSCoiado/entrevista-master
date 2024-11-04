@extends('layout.main')

@section('title', $vehicle->carModel)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/vehicle/{{$vehicle->image}}" class="img-fluid" alt="{{$vehicle->carModel}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1><ion-icon name="bus-outline"></ion-icon> {{$vehicle->carModel}}</h1>
                <p class="travel-driver"><ion-icon name="person-outline"></ion-icon> {{$vehicle->year}}</p>
                <p class="travel-car"><ion-icon name="trending-up-outline"></ion-icon> {{$vehicle->kmDriven}}</p>
                <p class="travel-reinder"><ion-icon name="reader-outline"></ion-icon> {{$vehicle->reinder}}</p>
            </div>
            <td>
                <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                <form action="/veiculo/{{$vehicle->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                </form>
            </td>
        </div>
    </div>
    
@endsection