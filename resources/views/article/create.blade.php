@extends('layouts.app')

@section('content')
    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
        @include('article.form')
        {{ html()->submit('Save')->class('btn btn-primary') }}
    {{ html()->closeModelForm() }}
@endsection
