@extends('layouts.layout')

@section('main')
    <div class="container">
        <h1>Article {{ $articles->id }}</h1>
        <h2>{{ $articles->title }}</h2>
        <img src="{{ $articles->image }}">
        <h2>{{ $articles->description }}</h2>
        <h2>{{ $articles->price }} $</h2>

        <a href="{{ route('articles.index') }}">Retourner à la liste des articles</a>
    </div>
@endsection
