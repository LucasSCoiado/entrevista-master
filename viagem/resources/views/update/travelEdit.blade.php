@extends('layout.main')

@section('title', 'Editando ' .$travel->origem. ' para ' . $travel->destino)

@section('content')

<div id="travels-create-container" class="col-md-6 offset-md-3">
    <h1>Editando viagem  {{$travel->origem}} para {{$travel->destino}}</h1>
    <form action="/viagem/travelUpdate/{{$travel->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Fotos da viagem</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="/img/travel/{{$travel->image}}" alt="{{$travel->destino}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="veiculo_id">Veiculo</label>
            <input type="number" class="form-control" placeholder="ID do veiculo..." name="veiculo_id" id="veiculo_id" value="{{$travel->veiculo_id}}">
        </div>
        <div class="form-group">
            <label for="veiculo_id">Origem</label>
            <input type="text" class="form-control" placeholder="Cidade de origem..." name="origem" id="origem" value="{{$travel->origem}}">
        </div>
        <div class="form-group">
            <label for="veiculo_id">Destino</label>
            <input type="text" class="form-control" placeholder="Cidade de destino..." name="destino" id="destino" value="{{$travel->destino}}">
        </div>
        <div class="form-group">
            <label for="km_inicio">Km de inicio da viagem</label>
            <input type="number" class="form-control" placeholder="Distancia de inicio..." name="km_inicio" id="km_inicio" value="{{$travel->km_inicio}}">
        </div>
        <div class="form-group">
            <label for="km_fim">Km ao final da viagem</label>
            <input type="number" class="form-control" placeholder="Distancia ao final da viagem..." name="km_fim" id="km_fim" value="{{$travel->km_fim}}">
        </div>
        <div class="form-group">
            <label for="motorista_id">Motorista</label>
            <input type="number" class="form-control" placeholder="ID do Motorista..." name="motorista_id" id="motorista_id" value="{{$travel->motorista_id}}">
        </div>
        <input type="submit" class="btn btn-primary" value="Alterar dados">
    </form>
</div>

@endsection