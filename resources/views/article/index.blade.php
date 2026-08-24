@extends('layouts.app')

@section('header', __('views.article.index.list'))

@section('content')
    <a class="text-blue-600 hover:underline" href="{{ route('articles.create') }}">@lang('views.article.index.addNewArticle')</a>

    <div class="mt-4 rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        {{  html()->form('GET', route('articles.index'))->open() }}
            <div class="flex flex-wrap items-center gap-2">
                {{  html()->input('text', 'name', $inputName)->class('flex-1 rounded border border-gray-300 px-3 py-2') }}
                {{  html()->submit('Search')->class('cursor-pointer rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700') }}
            </div>
        {{ html()->form()->close() }}
    </div>

    <div class="mt-8 overflow-x-auto">
        <table class="w-full border-collapse bg-white text-left">
            <thead>
                <tr class="border-b border-gray-200">
                    <th class="px-4 py-2 font-semibold">@lang('models.article.id')</th>
                    <th class="px-4 py-2 font-semibold">@lang('models.article.name')</th>
                    <th class="px-4 py-2 font-semibold">@lang('views.article.index.actions')</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr class="border-b border-gray-100 odd:bg-gray-50">
                        <td class="px-4 py-2">{{$article->id}}</td>
                        <td class="px-4 py-2"><a class="text-blue-600 hover:underline" href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></td>
                        <td class="px-4 py-2">
                            <div class="flex flex-wrap items-center gap-3">
                                <a class="text-blue-600 hover:underline" href="{{route('articles.edit', $article->id)}}">@lang('views.article.index.buttons.edit')</a>
                                {{-- Удаление это форма, а не ссылка с data-method: тот атрибут понимал
                                     только @rails/ujs, который ушёл вместе с Bootstrap. --}}
                                <form action="{{route('articles.destroy', $article->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="cursor-pointer text-red-600 hover:underline" type="submit">@lang('views.article.index.buttons.delete')</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{$articles->links()}}
    </div>
@endsection
