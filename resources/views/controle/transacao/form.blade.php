<div class="control-group">
    {!! Form::label('nome', 'Categoria Transação',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::select('categoria_transacaos_id', ['' => 'Selecione']+$categoriatransacaos, isset($transacao->categoria_transacaos_id) ? $transacao->categoria_transacaos_id : null ,['class' => 'span6']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('nome', 'Transação',['class' => 'control-label']) !!}
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
<div class="control-group">
    {!! Form::label('', 'Rota',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('rota',old('rota'),['class' => 'span6']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('', 'Exibir',['class' => 'control-label']) !!}
    <div class="controls">
        <div class="controls">
            <div class="danger-toggle-button">
                <input name="exibir" value="1" type="checkbox" {{ (isset($transacao) && ($transacao->exibir == 1)) ? 'checked' : '' }} class="toggle" />
            </div>
        </div>
    </div>
</div>
<div class="form-actions">
    {!! Form::submit('Salvar',['class' => 'btn btn-primary']) !!}
    {!! Form::button('Cancelar', ['class' => 'btn','onclick' => 'window.history.back();']) !!}
</div>
