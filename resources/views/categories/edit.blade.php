@extends('layouts.layout')

@section('main')
        <h1>Éditer une catégorie</h1>

        {!! Form::open([
            'route' => ['categories.update', $categories->id],
            'method' => 'PUT'
        ]) !!}

        {!! Form::label('title', 'Titre de la catégorie') !!}
        {!! Form::text('title', $categories->title, ['placeholder' => 'Titre catégorie']) !!}

        <br/>
        <br/>

        {!! Form::label('description', 'Description de la catégorie') !!}
        {!! Form::textarea('description', $categories->description, ['placeholder' => 'Description catégorie']) !!}

        <br/>
        <br/>


        {!! Form::submit('Editer') !!}

        {!! Form::close() !!}

        <br/>

        {!! Form::open([
            'route' => ['categories.destroy', $categories->id],
            'method' => 'DELETE'
        ]) !!}

        {!! Form::submit('Supprimer') !!}

        {!! Form::close() !!}
@endsection
