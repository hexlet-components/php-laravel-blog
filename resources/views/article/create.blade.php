@extends('layouts.app')

@section('header', 'New article')

@section('content')
    <div class="max-w-xl rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
            @include('article.form')
            {{ html()->submit('Save')->class('cursor-pointer rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700') }}
        {{ html()->closeModelForm() }}
    </div>
@endsection
