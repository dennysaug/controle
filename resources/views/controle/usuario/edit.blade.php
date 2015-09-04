@extends('controle.layout.principal')

@section('conteudo')
    <div id="page">
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="widget">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Alterar Usuário</h4>

                    </div>
                    <div class="widget-body form">
                        {!! Form::Model($usuario,['route' => ['controle.usuario.alterar', $usuario], 'class' => 'form-horizontal']) !!}
                            @include('controle.usuario.form')
                        {!! Form::close() !!}
                                <!-- END FORM-->
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
        </div>
    </div>
@endsection
