@extends('layout.main')

@section('title', 'Cadastro de Viagens')

@section('content')

<div id="travels-create-container" class="col-md-6 offset-md-3">
    <h1>Registro de viagens</h1>
    <form action="/travels" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Fotos da viagem</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="veiculo_id">Veiculo</label>
            <input type="number" class="form-control" placeholder="ID do veiculo..." name="veiculo_id" id="veiculo_id">
        </div>
        <div class="form-group">
            <label for="veiculo_id">Origem</label>
            <input type="text" class="form-control" placeholder="Cidade de origem..." name="origem" id="origem">
        </div>
        <div class="form-group">
            <label for="veiculo_id">Destino</label>
            <input type="text" class="form-control" placeholder="Cidade de destino..." name="destino" id="destino">
        </div>
        <div class="form-group">
            <label for="km_inicio">Km de inicio da viagem</label>
            <input type="number" class="form-control" placeholder="Distancia de inicio..." name="km_inicio" id="km_inicio">
        </div>
        <div class="form-group">
            <label for="km_fim">Km ao final da viagem</label>
            <input type="number" class="form-control" placeholder="Distancia ao final da viagem..." name="km_fim" id="km_fim">
        </div>
        <div class="form-group">
            <label for="motorista_id">Motorista</label>
            <input type="number" class="form-control" placeholder="ID do Motorista..." name="motorista_id" id="motorista_id">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar viagem">
    </form>
</div>

@endsection