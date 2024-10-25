@extends('layout.main')

@section('title', 'Cadastro de Veiculos')

@section('content')

<div id="travels-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre o veículo</h1>
    <form action="/vehicle" method="POST">
        <div class="form-group">
            <label for="model">Modelo</label>
            <input type="text" class="form-control" placeholder="Modelo...">
            <label for="year">Ano</label>
            <input type="date" class="form-control" placeholder="Ano do veiculo...">
            <label for="acquisition">Data de aquisição</label>
            <input type="date" class="form-control" placeholder="Data de aquisição...">
            <label for="kmDriven">Km rodados</label>
            <input type="number" class="form-control" placeholder="Distancia já rodada..">
            <label for="reinder">Renavam</label>
            <input type="number" class="form-control" placeholder="Renavam do veículo">
        </div>
    </form>
</div>


@endsection