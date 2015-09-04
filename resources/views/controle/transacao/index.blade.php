@extends('controle.layout.principal')
@section('conteudo')<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <a class="btn btn-inverse" href="{{ route('controle.transacao.salvar') }}"><i class="icon-plus icon-white"></i> Cadastrar</a>
            <div class="clearfix"></div>
            <br/>
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Transações</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                </div>
                <div class="widget-body">
                    @include('controle.layout.mensagem')
                    <table class="table table-striped table-bordered" id="sample_1">
                        <thead>
                        <tr>
                            <th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes" /></th>
                            <th>Área</th>
                            <th>Sub Área</th>
                            <th>Classe</th>
                            <th>Exibir</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($transacaos as $transacao)
                            <tr class="odd gradeX">
                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                <td>{{ $transacao->categoria->nome }}</td>
                                <td>{{ $transacao->nome }}</td>
                                <td><i class="{{ $transacao->classe }}"></i> {{ $transacao->classe }}</td>
                                <td>{{ ($transacao->exibir == '1') ? 'Sim' : 'Não' }}</td>
                                <td class="center">
                                    <a href="{!! route('controle.transacao.alterar',$transacao) !!}" class="icon huge"><i class="icon-pencil"></i></a>&nbsp;
                                    <a href="{!! route('controle.rota',$transacao) !!}" class="icon huge"><i class="icon-random"></i></a>&nbsp;
                                    <a href="{!! route('controle.transacao.excluir',$transacao) !!}" class="icon huge excluir" data-toggle="modal"><i class="icon-remove"></i></a>&nbsp;
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