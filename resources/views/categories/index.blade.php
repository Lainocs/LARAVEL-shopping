@extends('layouts.layout')

@section('main')
        <h1 class="text-center">Catégories</h1>
        <ul class="w-3/6 mx-auto">
            @foreach($categories as $category)
                <li class="relative p-4">
                    <span class="font-bold">{{ $category->title }}</span>
                    <div class="absolute right-0 top-2">
                        <a class="pr-3" href="{{ route('categories.show', ['category' => $category->id]) }}">Voir</a>
                        <a class="pl-3" href="{{ route('categories.edit', ['category' => $category->id]) }}">Éditer</a>
                    </div>
                    <hr>
                </li>
            @endforeach
        </ul>

        <a class="w-1/5 flex justify-center mx-auto border-4" href="{{ route('categories.create') }}">Ajouter une catégorie</a>
@endsection
