<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Laravel Blog</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/css/app.css'])
    </head>
    <body class="flex min-h-screen flex-col bg-gray-50 text-gray-900">
        <nav class="border-b border-gray-200 bg-white">
            <div class="mx-auto flex max-w-5xl flex-wrap items-center gap-6 px-4 py-3">
                <a class="text-lg font-semibold" href="/">PHP Laravel Blog</a>
                <div class="flex flex-wrap gap-4">
                    <a class="text-sm text-gray-600 hover:text-gray-900" aria-current="page" href="/">@lang('layouts.app.home')</a>
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('pages.show', ['page' => 'about']) }}">@lang('layouts.app.about')</a>
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('articles.index') }}">@lang('layouts.app.articles')</a>
                </div>
            </div>
        </nav>

        <div class="mx-auto w-full max-w-5xl flex-1 px-4 pb-10">
            @if (session('flash'))
                <div class="mt-4 rounded border border-green-200 bg-green-50 px-4 py-3 text-green-800">{{ session('flash') }}</div>
            @endif

            @hasSection('header')
                <h1 class="mt-6 mb-4 text-3xl font-bold">@yield('header')</h1>
            @endif

            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
