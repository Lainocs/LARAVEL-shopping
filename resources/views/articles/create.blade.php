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
    'route' => 'articles.store',
    'method' => 'POST'
]) !!}

{!! Form::label('title', 'Titre de l\'article') !!}
{!! Form::text('title', null, ['placeholder' => 'title placeholder']) !!}

<br/>
<br/>

{!! Form::label('image', 'image') !!}
{!! Form::text('image', null, ['placeholder' => 'image']) !!}

<br/>
<br/>

{!! Form::label('description', 'Description') !!}
{!! Form::textarea('description', null, ['placeholder' => 'Description']) !!}

<br/>
<br/>

{!! Form::label('price', 'Price') !!}
{!! Form::text('price', null, ['placeholder' => 'Price']) !!}

<br/>
<br/>

{!! Form::label('quantity', 'quantity') !!}
{!! Form::text('quantity', null) !!}

<br/>
<br/>

{!! Form::label('user_id', 'Auteur') !!}
{!! Form::select('user_id', $users) !!}

<br/>
<br/>

{!! Form::label('category_id', 'Catégorie') !!}
{!! Form::select('category_id', $categories) !!}

<br/>
<br/>

{!! Form::label('publication_date', 'Date de publication') !!}
{!! Form::date('publication_date', null, ['placeholder' => 'Date de publication']) !!}

<br/>
<br/>

{!! Form::label('published', 'Marqué comme publié') !!}
{!! Form::checkbox('published') !!}

<br/>
<br/>
{!! Form::submit('Envoyer') !!}

{!! Form::close() !!}
