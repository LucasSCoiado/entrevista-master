@extends('layout.main')

@section('title', 'Viagens')

@section('content')

<div id="data-container" class="col-md-12">
    <h1>Pagina de Viagens</h1>
    <div id="cards-container" class="row">
        <h2>Proximas viagens</h2>
        <p class="subtitle">Veja as proximas viagens</p>
        @foreach ($travels as $travel)
            <div class="card col-md-3">
                <img src="/img/viagem_onibus.avif" alt="{{$travel->km_fim}}">
                <div class="card-body">
                    <h5 class="card-end">Km total {{$travel->km_fim}}</h5>
                    <p class="card-driver">Id motorista {{$travel->motorista_id}}</pc>
                    <p class="card-car">Id Veiculo {{$travel->veiculo_id}}</p>
                    <a href="" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection