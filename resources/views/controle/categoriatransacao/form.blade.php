<div class="control-group">
    {!! Form::label('nome', 'Nome',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('nome',old('nome'),['class' => 'span6']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('', 'Classe',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('classe',old('classe'),['class' => 'span6']) !!}
    </div>
</div>
<div class="form-actions">
    {!! Form::submit('Salvar',['class' => 'btn btn-primary']) !!}
    {!! Form::button('Cancelar', ['class' => 'btn','onclick' => 'window.history.back();']) !!}
</div>