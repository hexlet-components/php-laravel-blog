@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Actions</td>
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
