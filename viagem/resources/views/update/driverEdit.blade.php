@extends('layout.main')

@section('title', 'Editando dados do Motorista: ' . $driver->name)

@section('content')

<div id="travels-create-container" class="col-md-6 offset-md-3">
    <h1>Editando o motorista: {{$driver->name}}</h1>
    @if (session('msg-negative'))
        <p class="msg-negative">{{session('msg-negative')}}</p>
    @endif
    <form action="/motorista/driverUpdate/{{$driver->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Foto do motorista</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="/img/driver/{{$driver->image}}" alt="{{$driver->name}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome do motorista..." value="{{$driver->name}}">
        </div>
        <div class="form-group">
            <label for="birth">Nascimento</label>
            <input type="date" class="form-control" name="birth" id="birth" placeholder="Data de nascimento..." value="{{$driver->birth->format('Y-m-d')}}">
        </div>
        <div class="form-group">
            <label for="cnh">CNH</label>
            <input type="number" class="form-control" name="cnh" id="cnh" placeholder="CNH..." value="{{$driver->cnh}}">
        </div>
        <input type="submit" class="btn btn-primary" value="Alterar dados">
    </form>
</div>
@endsection