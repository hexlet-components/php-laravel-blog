@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="mb-3">
    {{  html()->label('Name', 'name')->class('form-label') }}
    {{  html()->input('text', 'name')->class('form-control') }}

</div>
<div class="mb-3">
    {{  html()->label('Content', 'body')->class('form-label') }}
    {{  html()->textarea('body')->class('form-control') }}
</div>
