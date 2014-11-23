
{{ Form::open(array('route' => 'statistics.update.player', 'files' => true)) }}

    <div class="form-group">
        {{ Form::label('Name', 'Name:') }}
        {{ Form::text('player_name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('image', 'Image:') }}
        {{ Form::file('image', null, array('class' => 'form-control')) }}
    </div>

        {{ Form::hidden('id', $statistic->id, array('class' => 'form-control')) }}

    <div class="form-group">
        {{ Form::submit('Senden', array('class' => 'btn btn-default')) }}
    </div>

{{ Form::close() }}