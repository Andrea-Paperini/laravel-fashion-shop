@extends('layouts.main')
@section('title', 'homepage')
@section('content')
    <div class="cc container mt-5">
        <div class="row">
            <h1 class="c text-left">Laravel Fashion Shop</h1>
        </div>
        <div class="d-flex flex-wrap justify-content-around mt-5 float-left">
            @foreach ($vestiti as $prodotto)
                <div class="card mr-5 mb-5">
                    <div class="card-header">
                        <h1>Capo di abbigliamento</h1>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id: {{$prodotto->id}}</li>
                        <li class="list-group-item">Tipologia: {{$prodotto->tipologia}}</li>
                        <li class="list-group-item">Nome: {{$prodotto->nome}}</li>
                        <li class="list-group-item">Prezzo: {{$prodotto->prezzo}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
