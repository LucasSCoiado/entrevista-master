@extends('layout.main')

@section('title', 'Cadastro de Viagens')

@section('content')

<div id="travels-create-container" class="col-md-6 offset-md-3">
    <h1>Registro de viagens</h1>
    <label for="veiculo_id">Veiculo</label>
    <input type="number" class="form-control" placeholder="ID do veiculo...">
    <label for="km_inicio">Km de inicio da viagem</label>
    <input type="number" class="form-control" placeholder="Distancia de inicio...">
    <label for="km_fim">Km ao final da viagem</label>
    <input type="number" class="form-control" placeholder="Distancia ao final da viagem...">
    <label for="motorista_id">Motorista</label>
    <input type="number" class="form-control" placeholder="ID do Motorista...">
</div>

@endsection