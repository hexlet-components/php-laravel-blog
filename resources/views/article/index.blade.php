@extends('layouts.app')

@section('content')
    <h1>@lang('views.article.index.list')</h1>
    <a class="text-decoration-none" href="{{ route('articles.create') }}">@lang('views.article.index.addNewArticle')</a>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <td>@lang('models.article.id')</td>
                    <td>@lang('models.article.name')</td>
                    <td>@lang('views.article.index.actions')</td>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td><a class="text-decoration-none" href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></td>
                        <td><a class="text-decoration-none" href="{{route('articles.edit', $article->id)}}">@lang('views.article.index.buttons.edit')</td>
                        <td><a class="text-decoration-none" href="{{route('articles.destroy', $article->id)}}" data-confirm="Are you sure?" data-method="delete">@lang('views.article.index.buttons.delete')</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{$articles->links()}}
    <div>
@endsection
