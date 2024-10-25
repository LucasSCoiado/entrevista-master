@extends('layout.main')

@section('title', 'Cadastro de Motoristas')

@section('content')

<div id="travels-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre o motorista</h1>
    <label for="name">Nome</label>
    <input type="text" class="form-control" placeholder="Nome do motorista...">
    <label for="bith">Nascimento</label>
    <input type="date" class="form-control" placeholder="Data de nascimento...">
    <label for="cnh">CNH</label>
    <input type="number" class="form-control" placeholder="CNH...">
</div>

@endsection