@extends('layouts.app')

@section('content')
    <h1>@lang('views.article.index.list')</h1>
    <a href="{{ route('articles.create') }}">@lang('views.article.index.addNewArticle')</a>
    <div>
        <table>
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
                        <td><a href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></td>
                        <td><a href="{{route('articles.edit', $article->id)}}">Edit</td>
                        <td><a href="{{route('articles.destroy', $article->id)}}" data-confirm="Вы уверены?" data-method="delete">Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{$articles->links()}}
    <div>
@endsection
