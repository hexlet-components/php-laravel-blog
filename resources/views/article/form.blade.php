@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::label('name', 'Название') }}
{{ Form::text('name') }}<br>
{{ Form::label('body', 'Содержание') }}
{{ Form::textarea('body') }}<br>

