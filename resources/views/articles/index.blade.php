@extends('app')

@section('content')

    <h1>All Articles</h1>

    @foreach($articles as $article)
        @include('articles.partials.article')
    @endforeach

    @unless( ! $articles->isEmpty())
        <div class="panel panel-default">
            <div class="panel-body">
                No articles found.
            </div>
        </div>
    @endunless

    {!! $articles->render() !!}
@endsection