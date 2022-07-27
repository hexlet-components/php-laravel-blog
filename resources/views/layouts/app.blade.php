<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Laravel Blog</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">PHP Laravel Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/">@lang('layouts.app.home')</a>
                        <a class="nav-link" href="{{ route('pages.show', ['page' => 'about']) }}">
                        @lang('layouts.app.about')</a>
                        <a class="nav-link" href="{{ route('articles.index') }}">
                        @lang('layouts.app.articles')</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
        </div>

    </body>
</html>
