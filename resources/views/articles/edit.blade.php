@extends('layouts.layout')

@section('main')
        <h1>Editer un article</h1>
{!! Form::open([
    'route' => ['articles.update', $articles->id],
    'method' => 'PUT'
]) !!}

{!! Form::label('title', 'Titre de l\'article') !!}
{!! Form::text('title', $articles->title, ['placeholder' => 'title placeholder']) !!}

<br/>
<br/>

{!! Form::label('image', 'image') !!}
{!! Form::text('image', $articles->image, ['placeholder' => 'image']) !!}

<br/>
<br/>

{!! Form::label('description', 'Description') !!}
{!! Form::textarea('description', $articles->description, ['placeholder' => 'Description']) !!}

<br/>
<br/>

{!! Form::label('price', 'Price') !!}
{!! Form::text('price', $articles->price, ['placeholder' => 'Price']) !!}

<br/>
<br/>

{!! Form::label('quantity', 'quantity') !!}
{!! Form::text('quantity', $articles->quantity, ['placeholder' => 'Price']) !!}

<br/>
<br/>

{!! Form::label('published', 'Marqué comme publié') !!}
{!! Form::checkbox('published') !!}

<br/>
<br/>
{!! Form::submit('Editer') !!}

{!! Form::close() !!}

<br/>

{!! Form::open([
    'route' => ['articles.destroy', $articles->id],
    'method' => 'DELETE'
]) !!}

{!! Form::submit('Supprimer') !!}

{!! Form::close() !!}
@endsection
