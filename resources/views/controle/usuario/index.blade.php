@extends('controle.layout.principal')
@section('conteudo')<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <a class="btn btn-inverse" href="{{ route('controle.usuario.salvar') }}"><i class="icon-plus icon-white"></i> Cadastrar</a>
            <div class="clearfix"></div>
            <br/>
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Usuários</h4>
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
                            <th class="hidden-phone">Email</th>
                            <th class="hidden-phone">Grupo</th>
                            <th class="hidden-phone">Data Cadastro</th>
                            <th class="hidden-phone">Relatório</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($usuarios as $usuario)
                            <tr class="odd gradeX">
                                <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                <td>{{ $usuario->nome }}</td>
                                <td class="hidden-phone"><a href="mailto:{{ $usuario->email }}">{{ $usuario->email }}</a></td>
                                <td class="hidden-phone">{{  $usuario->grupo->nome }}</td>
                                <td class="hidden-phone center">{{ $usuario->created_at }}</td>
                                <td class="hidden-phone"><span class="label label-success">Enviado</span></td>
                                <td class="center">
                                    <a href="{!! route('controle.usuario.alterar',$usuario) !!}" class="icon huge"><i class="icon-pencil"></i></a>&nbsp;
                                    <a href="{!! route('controle.usuario.excluir',$usuario) !!}" class="icon huge excluir" data-toggle="modal"><i class="icon-remove"></i></a>&nbsp;
                                </td>
                            </tr>
                        @empty
                            <tr><h2>Nenhum usuário cadastro no sistema</h2></tr>
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