@extends('layout.main')

@section('title', 'Viagens')

@section('content')

<div id="navbar navbar-expand-lg navbar-light center">
    <nav class="navbar-secondary navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar-secondary">
            <ul class="navbar-nav-secondary">
                <li class="nav-item">
                    <a href="/register/travelRegister" class="nav-link register"><ion-icon name="analytics-outline"></ion-icon>
                    Cadastro de viagens</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<main>
    <div class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
            @yield('content')
        </div>
    </div>

</main>    

<div id="data-container" class="col-md-12">
    <h1>Pagina de Viagens</h1>
    <div id="cards-container" class="row">
        <h2>Proximas viagens</h2>
        <p class="subtitle">Veja as proximas viagens</p>
        @foreach ($travels as $travel)
            <div class="card col-md-3">
                <img src="/img/travel/{{$travel->image}}" alt="{{$travel->km_fim}}">
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