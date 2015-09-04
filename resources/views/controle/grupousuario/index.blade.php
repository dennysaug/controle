@extends('controle.layout.principal')
@section('conteudo')<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <a class="btn btn-inverse" href="{{ route('controle.grupousuario.salvar') }}"><i class="icon-plus icon-white"></i> Cadastrar</a>
            <div class="clearfix"></div>
            <br/>
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Grupo de Usuários</h4>
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
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($gruposusuarios as $grupousuario)
                            <tr class="odd gradeX">
                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                <td>{{ $grupousuario->nome }}</td>
                                <td class="center">
                                    <a href="{!! route('controle.grupousuario.alterar',$grupousuario) !!}" class="icon huge"><i class="icon-pencil"></i></a>&nbsp;
                                    <a href="{!! route('controle.permissao',$grupousuario) !!}" class="icon huge"><i class="icon-lock"></i></a>&nbsp;
                                    <a href="{!! route('controle.grupousuario.excluir',$grupousuario) !!}" class="icon huge excluir"><i class="icon-remove"></i></a>&nbsp;
                                </td>
                            </tr>
                        @empty
                            <tr><h2>Nenhum grupo de usuário cadastro no sistema</h2></tr>
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