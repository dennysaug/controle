@extends('controle.layout.principal')
@section('conteudo')<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <a class="btn btn-inverse" href="{{ route('controle.rota.salvar',$transacao) }}"><i class="icon-plus icon-white"></i> Cadastrar</a>
            <div class="clearfix"></div>
            <br/>
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Rotas</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                </div>
                <div class="widget-body">
                    @include('controle.layout.mensagem')
                    <h3>{{ $transacao->nome }}</h3>
                    <table class="table table-striped table-bordered" id="sample_1">
                        <thead>
                        <tr>
                            <th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes" /></th>
                            <th>Permissão</th>
                            <th>URI</th>
                            <th>AS</th>
                            <th>USES</th>
                            <th>Restrito</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($rotas as $rota)
                            <tr class="odd gradeX">
                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                <td>{{ $rota->permissao }}</td>
                                <td>{{ $rota->uri }}</td>
                                <td>{{ $rota->as }}</td>
                                <td>{{ $rota->uses }}</td>
                                <td>{{ (isset($rota) && $rota->restrito == '1') ? 'Sim' : 'Não' }}</td>
                                <td class="center">
                                    <a href="{!! route('controle.rota.alterar',$rota) !!}" class="icon huge"><i class="icon-pencil"></i></a>&nbsp;
                                    <a href="{!! route('controle.rota.excluir',$rota) !!}" class="icon huge excluir" data-toggle="modal"><i class="icon-remove"></i></a>&nbsp;
                                </td>
                            </tr>
                        @empty
                            <tr><h2>Nenhuma transação cadastrada no sistema</h2></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>
@endsection