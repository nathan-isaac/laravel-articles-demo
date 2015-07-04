@extends('app')

@section('content')
    <h1>Add Article</h1>

    {!! Form::open(['url' => route('articles.store')]) !!}
        <div class="form-group">
            {!! Form::label('title') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>

        <button type="submit" class="btn btn-primary btn-block">Add</button>
    {!! Form::close() !!}
@endsection