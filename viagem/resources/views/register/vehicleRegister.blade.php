@extends('layout.main')

@section('title', 'Cadastro de Veiculos')

@section('content')

<div id="travels-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre o veículo</h1>
    <form action="/register"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Foto do veiculo</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="carModel">Modelo</label>
            <input type="text" class="form-control" placeholder="Modelo..." name="carModel" id="carModel">
        </div>
        <div class="form-group">
            <label for="year">Ano</label>
            <input type="date" class="form-control" id="year" name="year" placeholder="Ano do veiculo...">
        </div>
        <div class="form-group">
            <label for="acquisition">Data de aquisição</label>
            <input type="date" class="form-control" id="acquisition" name="acquisition" placeholder="Data de aquisição...">
        </div>
        <div class="form-group">
            <label for="kmDriven">Km rodados</label>
            <input type="number" class="form-control" id="kmDriven" name="kmDriven" placeholder="Distancia já rodada..">
        </div>
        <div class="form-group">
            <label for="reinder">Renavam</label>
            <input type="number" class="form-control" id="reinder" name="reinder" placeholder="Renavam do veículo">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar veículo">
    </form>
</div>


@endsection