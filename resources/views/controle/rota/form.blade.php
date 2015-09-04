<div class="control-group">
    {!! Form::label('permissao', 'Permissão',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('permissao',null,['class' => 'span6','placeholder' => 'Cadastrar']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('uri', 'URI',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('uri',null,['class' => 'span6','placeholder' => 'link dentro do controle']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('as', 'AS',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('as',null,['class' => 'span6','placeholder' => 'controle.X.salvar']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('uses', 'USES',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('uses',null,['class' => 'span6','placeholder' => 'Controle\XxxController@metodo']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('restrito', 'Restrito',['class' => 'control-label']) !!}
    <div class="controls">
        <div class="danger-toggle-button">
            <input name="restrito" value="1" type="checkbox" class="toggle" {{ (isset($rota) && $rota->restrito == '1') ? 'checked' : '' }} />
        </div>
    </div>
</div>
<div class="form-actions">
    {!! Form::submit('Salvar',['class' => 'btn btn-primary']) !!}
    {!! Form::button('Cancelar', ['class' => 'btn','onclick' => 'window.history.back();']) !!}
</div>
