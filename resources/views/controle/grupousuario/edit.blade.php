@extends('controle.layout.principal')

@section('conteudo')
    <div id="page">
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="widget">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Alterar Grupo de Usuário</h4>

                    </div>
                    <div class="widget-body form">
                        {!! Form::Model($grupousuario,['route' => ['controle.grupousuario.alterar', $grupousuario], 'class' => 'form-horizontal']) !!}
                            @include('controle.grupousuario.form')
                        {!! Form::close() !!}
                                <!-- END FORM-->
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
        </div>
    </div>
@endsection
