@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::label('name', 'Name') }}<br>
{{ Form::text('name') }}<br>
{{ Form::label('body', 'Content') }}<br>
{{ Form::textarea('body') }}<br>
