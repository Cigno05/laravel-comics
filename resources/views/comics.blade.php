@extends('layouts.app')

@section('title')

Comics

@endsection

@section('content')

<h1>Siamo nella pagina Comics</h1>

<div class="container mt-5">
    <div class="row">
        @foreach($comics as $comic)
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 card-group">
                <div class="card m-2 mb-4">
                    <img src="{{ $comic['thumb']}}" alt="">

                    <div class="card-body">
                        <h3 class="card-title">{{ $comic['title']}}</h3>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h5>{{ $comic['series'] }}</h5></li>
                        <li class="list-group-item"><h5>Prezzo: {{ $comic['price']}}</li>
                        <li class="list-group-item"><h5>Uscito il: {{ $comic['sale_date']}}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection