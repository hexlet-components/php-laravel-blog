@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::label('name', 'Название') }}<br>
{{ Form::text('name') }}<br>
{{ Form::label('body', 'Содержание') }}<br>
{{ Form::textarea('body') }}<br>
