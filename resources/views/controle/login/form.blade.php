@extends('controle.login.index')

@section('login')
    {!! Form::open(['route' => ['auth.login'],'id' => 'loginform', 'class' => 'form-vertical no-padding no-margin']) !!}
    <p class="center">Entre com seu e-mail e senha.</p>
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                {!! Form::text('email', null,['placeholder' => 'E-mail']) !!}
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                {!! Form::password('password', ['placeholder' => 'Senha']) !!}
            </div>
            <div class="block-hint pull-right">
                <a href="javascript:;" class="" id="forget-password">Forgot Password?</a>
            </div>
            <div class="clearfix space5"></div>
        </div>
    </div>
    <input type="submit" id="login-btn" class="btn btn-block btn-inverse" value="Login" />
    {!! Form::close() !!}
<!-- END LOGIN FORM -->
<!-- BEGIN FORGOT PASSWORD FORM -->
<form id="forgotform" class="form-vertical no-padding no-margin hide" action="index.html">
    <p class="center">Enter your e-mail address below to reset your password.</p>
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span><input id="input-email" type="text" placeholder="Email" />
            </div>
        </div>
        <div class="space10"></div>
    </div>
    <input type="button" id="forget-btn" class="btn btn-block btn-inverse" value="Submit" />
</form>
@stop