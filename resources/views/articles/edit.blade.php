@extends('app')

@section('content')
    <h1>Update Article</h1>

    {!! Form::model($article, ['url' => route('articles.update', ['id' => $article->id]), 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('title') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>

        <button type="submit" class="btn btn-primary btn-block">Update</button>
    {!! Form::close() !!}
@endsection