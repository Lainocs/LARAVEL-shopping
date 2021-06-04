@extends('layouts.layout')

@section('main')
    <div class="container">
        <h1>Catégorie {{ $categories->id }}</h1>
        <h2>{{ $categories->title }}</h2>
        <h2>{{ $categories->description }}</h2>

        <a href="{{ route('categories.index') }}">Retourner à la liste des catégories</a>
    </div>
@endsection
