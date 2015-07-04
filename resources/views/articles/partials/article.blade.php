<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{ $article->title }}</h3>
    </div>

    <div class="panel-body">
        {{ $article->content }}
    </div>

    <div class="panel-footer">
        <a href="{{ route('articles.show', ['id' => $article->id]) }}" class="btn btn-default">View</a>

        <a href="{{ route('articles.edit', ['id' => $article->id]) }}" class="btn btn-default">Edit</a>

        {!! Form::open(['url' => route('articles.destroy', $article->id), 'method' => 'delete', 'class' => 'pull-right']) !!}
            <button type="submit" class="btn btn-danger">Delete</button>
        {!! Form::close() !!}
    </div>
</div>