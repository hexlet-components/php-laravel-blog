@extends('layouts.app')

@section('header', 'Edit article')

@section('content')
    <div class="max-w-xl rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
            @include('article.form')
            {{ html()->submit('Update')->class('cursor-pointer rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700') }}
        {{ html()->closeModelForm() }}
    </div>
@endsection
