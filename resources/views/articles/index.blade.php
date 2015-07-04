@extends('app')

@section('content')

    <h1>All Articles</h1>

    @forelse($articles as $article)
        @include('articles.partials.article')
    @empty
        <div class="panel panel-default">
            <div class="panel-body">
                No articles found.
            </div>
        </div>
    @endforelse

    {!! $articles->render() !!}
@endsection