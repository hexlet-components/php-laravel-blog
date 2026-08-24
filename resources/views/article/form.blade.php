@if ($errors->any())
    <div class="mb-4 rounded border border-red-200 bg-red-50 px-4 py-3 text-red-800">
        <ul class="list-inside list-disc">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="mb-4">
    {{  html()->label('Name', 'name')->class('mb-1 block text-sm font-medium') }}
    {{  html()->input('text', 'name')->class('w-full rounded border border-gray-300 px-3 py-2') }}
</div>
<div class="mb-4">
    {{  html()->label('Content', 'body')->class('mb-1 block text-sm font-medium') }}
    {{  html()->textarea('body')->class('w-full rounded border border-gray-300 px-3 py-2')->rows(6) }}
</div>
