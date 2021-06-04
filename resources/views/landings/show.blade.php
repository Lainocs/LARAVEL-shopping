@extends('layouts.layoutClient')

@section('main')
    <div class="container">
        <h1>Article {{ $landings->id }}</h1>
        <h2>{{ $landings->title }}</h2>
        <img src="{{ $landings->image }}">
        <h2>{{ $landings->description }}</h2>
        <h2>{{ $landings->price }} $</h2>
        <a href="{{ url('addToCart/'.$landings->id) }}">Add to cart</a>

        <a href="{{ route('landing.index') }}">Retourner à la liste des produits</a>
    </div>
@endsection
