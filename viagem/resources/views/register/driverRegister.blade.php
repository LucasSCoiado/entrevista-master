@extends('layout.main')

@section('title', 'Cadastro de Motoristas')

@section('content')

<div id="travels-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre o motorista</h1>
    @if (session('msg-negative'))
        <p class="msg-negative">{{session('msg-negative')}}</p>
    @endif
    <form action="/drivers" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Foto do motorista</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome do motorista...">
        </div>
        <div class="form-group">
            <label for="birth">Nascimento</label>
            <input type="date" class="form-control" name="birth" id="birth" placeholder="Data de nascimento...">
        </div>
        <div class="form-group">
            <label for="cnh">CNH</label>
            <input type="number" class="form-control" name="cnh" id="cnh" placeholder="CNH...">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar funcionario">
    </form>
</div>

@endsection