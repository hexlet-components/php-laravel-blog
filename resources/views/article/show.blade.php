@extends('layouts.app')

@section('header', $article->name)

@section('content')
    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <p class="text-lg">{{ $article->body }}</p>
    </div>
@endsection
