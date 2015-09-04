@extends('controle.layout.principal')

@section('conteudo')
    <div class="widget">
        <div class="widget-body">
            <h1>PERMISSÃO NEGADA!</h1>
            <div class="alert alert-error">
                <button class="close" data-dismiss="alert">×</button>
                <strong>Erro!</strong> Você não tem permissão para acessar esta página.
            </div>
        </div>
    </div>
@endsection