{{ Form::model($article, ['url' => route('articles.update', ['id' => $article->id]), 'method' => 'PATCH']) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
{{ Form::close() }}
