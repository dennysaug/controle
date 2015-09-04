<div class="control-group">
    {!! Form::label('nome', 'Nome',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('nome',old('nome'),['class' => 'span6']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('celular', 'Celular',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('celular',old('celular'),['class' => 'span6']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('email', 'E-mail',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('email',old('email'),['class' => 'span6']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('username', 'Username',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('username',old('username'),['class' => 'span6']) !!}
    </div>
</div>
@if(isset($gruposusuarios))
<div class="control-group">
    {!! Form::label('grupo', 'Grupo',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::select('grupo_id', $gruposusuarios->lists('nome','id'), null, ['class' => 'span6','tabindex' => '1','placeholder' => 'Selecione']) !!}
    </div>
</div>
@endif
<div class="control-group">
    {!! Form::label('senha', 'Senha',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::password('senha',null,['class' => 'span6']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('confirmar_senha', 'Confirmar Senha',['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::password('confirmar_senha',null,['class' => 'span6']) !!}
    </div>
</div>


<div class="form-actions">
    {!! Form::submit('Salvar',['class' => 'btn btn-primary']) !!}
    {!! Form::button('Cancelar', ['class' => 'btn','onclick' => 'window.history.back();']) !!}
</div>