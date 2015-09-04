@extends('controle.layout.principal')
@section('conteudo')<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            {!! Form::open(['route' => ['controle.permissao.alterar',$id]]) !!}
            <button  type="submit" class="btn btn-inverse"><i class="icon-retweet icon-white"></i> Alterar</button>
            <div class="clearfix"></div>
            <br/>
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Permissões</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                </div>
                <div class="widget-body">
                    @include('controle.layout.mensagem')

                    <div class="row-fluid">
                        <div class="span12">
                            @if(count($transacoes) > 0)
                                    <!--BEGIN TABS-->
                            <div class="tabbable tabbable-custom tabs-left">
                                <!-- Only required for left/right tabs -->
                                @if(isset($transacoes))
                                    <ul class="nav nav-tabs tabs-left">
                                        @foreach($transacoes as $n => $transacao)
                                            <li class="{{ ($n == 0) ? 'active' : '' }}"><a href="#tab_{{ $transacao->id }}" data-toggle="tab">{{ $transacao->nome }}</a></li>
                                        @endforeach
                                    </ul>
                                @else
                                    <h2>Nenhuma permissão encontrada no sistema</h2>
                                @endif

                                <div class="tab-content">
                                    @if(isset($transacoes))
                                        @foreach($transacoes as $n => $transacao)
                                            <div class="tab-pane {{ ($n == 0) ? 'active' : '' }}" id="tab_{{ $transacao->id }}">
                                                <h2>{{ $transacao->nome }}</h2>
                                                <table class="table table-striped table-bordered" id="sample_1">
                                                    <thead>
                                                    <tr>
                                                        <th style="width:8px"></th>
                                                        <th>Permissão</th>
                                                        <th>URI</th>
                                                        <th>AS</th>
                                                        <th>USES</th>
                                                        <th>Restrito</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(isset($transacao->rotas))
                                                        @forelse($transacao->rotas as $rota)
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    <div class="controls">
                                                                        <div class="danger-toggle-button">
                                                                            <input name="permissao_id[]" value="{{ $rota->id }}" type="checkbox" {{ (isset($permissoes) && in_array($rota->id,$permissoes)) ? 'checked' : '' }} class="toggle" />
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $rota->permissao }}</td>
                                                                <td>{{ $rota->uri }}</td>
                                                                <td>{{ $rota->as }}</td>
                                                                <td>{{ $rota->uses }}</td>
                                                                <td>{{ (isset($rota) && $rota->restrito == '1') ? 'Sim' : 'Não' }}</td>
                                                            </tr>
                                                        @empty
                                                            <tr><h2>Nenhuma transação cadastrada no sistema</h2></tr>
                                                        @endforelse
                                                    @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            @else
                                <h2>Nenhum permissão cadastrada</h2>
                                @endif
                                        <!--END TABS-->
                        </div>
                        <div class="space10 visible-phone"></div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
                    <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>
@endsection