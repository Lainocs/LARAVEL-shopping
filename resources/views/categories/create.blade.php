@extends('layouts.layout')

@section('main')
    <div class="container">
        <h1>Ajouter une catégorie</h1>

        @if($errors->any())
            <div style="background: red;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open([
            'route' => 'categories.store',
            'method' => 'POST'
        ]) !!}

        {!! Form::label('title', 'Titre de la catégorie') !!}
        {!! Form::text('title', null, ['placeholder' => 'Titre catégorie']) !!}


        {!! Form::label('description', 'Description de la catégorie') !!}
        {!! Form::textarea('description', null, ['placeholder' => 'Description catégorie']) !!}

        {!! Form::submit('Envoyer') !!}

        {!! Form::close() !!}
    </div>
@endsection
