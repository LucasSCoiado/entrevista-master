@extends('layout.main')

@section('title', $driver->name)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/driver/{{$driver->image}}" class="img-fluid" alt="{{$driver->name}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1> <ion-icon name="person-outline"></ion-icon> {{$driver->name}}</h1>
                <p class="driver-date"> <ion-icon name="calendar-number-outline"></ion-icon> {{$driver->birth}} </p>
                <p class="driver-cnh"> <ion-icon name="tablet-landscape-outline"></ion-icon> {{$driver->cnh}}</p>
            </div>
        </div>
        <td>
            <a href="/motorista/driverEdit/{{$driver->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
            <form action="/motorista/{{$driver->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
            </form>
        </td>
    </div>

@endsection