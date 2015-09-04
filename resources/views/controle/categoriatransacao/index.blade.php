@extends('controle.layout.principal')
@section('conteudo')<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <a class="btn btn-inverse" href="{{ route('controle.categoriatransacao.salvar') }}"><i class="icon-plus icon-white"></i> Cadastrar</a>
            <div class="clearfix"></div>
            <br/>
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Categoria de Transação</h4>
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
                            <th>Nome</th>
                            <th>Classe</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($categoriatransacaos as $categoriatransacao)
                            <tr class="odd gradeX">
                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                <td>{{ $categoriatransacao->nome }}</td>
                                <td><i class="{{ $categoriatransacao->classe }}"></i> {{ $categoriatransacao->classe }}</td>
                                <td class="center">
                                    <a href="{!! route('controle.categoriatransacao.alterar',$categoriatransacao) !!}" class="icon huge"><i class="icon-pencil"></i></a>&nbsp;
                                    <a href="{!! route('controle.categoriatransacao.excluir',$categoriatransacao) !!}" class="icon huge excluir"><i class="icon-remove"></i></a>&nbsp;
                                </td>
                            </tr>
                        @empty
                            <tr><h2>Nenhuma categoria de transação cadastro no sistema</h2></tr>
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