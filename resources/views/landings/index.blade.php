@extends('layouts.layoutClient')

@section('main')
    <h1 class="text-center">Landing</h1>
    <div class="w-4/5 mx-auto flex-wrap flex">
        @foreach( $landings as $landing )
            <div class=" mx-auto w-1/5 flex flex-col p-4 border border-black text-center justify-between">
                <span class="font-bold">{{ $landing->title }}</span>
                <img src="{{ $landing->image }}">
                <span class="font-bold">{{ $landing->price }} $</span>
                <a href="{{ route('landing.show', ['landing' => $landing->id]) }}" class="">Voir le produit</a>
                <a href="{{ url('addToCart/'.$landing->id) }}">Add to cart</a>

            </div>
        @endforeach
    </div>
@endsection
