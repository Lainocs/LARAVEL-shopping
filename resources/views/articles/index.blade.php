@extends('layouts.layout')

@section('main')
    <ul class="flex absolute right-0 top-3">
        <li class="pl-3 pr-3"><a href=" {{ url('categories') }} ">Catégories</a></li>
        <li class="pl-3 pr-3"><a href=" {{ url('categories') }} ">Articles</a></li>
    </ul>
        <h1 class="text-center">Articles</h1>

        <ul class="w-3/6 mx-auto">
            @foreach( $articles as $article )
                <li class="relative p-4">
                    <span class="font-bold">{{ $article->title }}</span>
                    <div class="absolute right-0 top-2">
                        <a class="pr-3" href="{{ route('articles.show', ['article' => $article->id]) }}">Voir</a>
                        <a class="pl-3" href="{{ route('articles.edit', ['article' => $article->id]) }}">Éditer</a>
                    </div>
                    <hr>
                </li>
            @endforeach
        </ul>

        <a class="w-1/5 flex justify-center mx-auto border-4" href="{{ route('articles.create') }}">Ajouter un article</a>
@endsection
