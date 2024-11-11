@extends('layout.main')

@section('title', 'Atualizando dados')

@section('content')

<div id="travels-create-container" class="col-md-6 offset-md-3">
    <h1>Atualizando dados do veículo {{$vehicle->carModel}}</h1>
    <form action="/veiculo/vehicleUpdate/{{$vehicle->id}}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Foto do veiculo</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="/img/vehicle/{{$vehicle->image}}" alt="" class="img-preview">
        </div>
        <div class="form-group">
            <label for="carModel">Modelo</label>
            <input type="text" class="form-control" placeholder="Modelo..." name="carModel" id="carModel" value="{{$vehicle->carModel}}">
        </div>
        <div class="form-group">
            <label for="year">Ano</label>
            <input type="date" class="form-control" id="year" name="year" placeholder="Ano do veiculo..."  value="{{$vehicle->year}}">
        </div>
        <div class="form-group">
            <label for="acquisition">Data de aquisição</label>
            <input type="date" class="form-control" id="acquisition" name="acquisition" placeholder="Data de aquisição..." value="{{$vehicle->acquisition}}">
        </div>
        <div class="form-group">
            <label for="kmDriven">Km rodados</label>
            <input type="number" class="form-control" id="kmDriven" name="kmDriven" placeholder="Distancia já rodada.." value="{{$vehicle->kmDriven}}">
        </div>
        <div class="form-group">
            <label for="reinder">Renavam</label>
            <input type="number" class="form-control" id="reinder" name="reinder" placeholder="Renavam do veículo" value="{{$vehicle->reinder}}">
        </div>
        <input type="submit" class="btn btn-primary" value="Alterar dados do veículo">
    </form>
</div>
@endsection