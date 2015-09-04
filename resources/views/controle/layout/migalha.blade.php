<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN STYLE CUSTOMIZER-->
        <div id="styler" class="hidden-phone">
            <i class="icon-cog"></i>
							<span class="settings">
							    <span class="text">Style:</span>
							        <span class="colors">
                                        <span class="color-default" data-style="default"></span>
                                        <span class="color-grey" data-style="grey"></span>
                                        <span class="color-navygrey" data-style="navygrey"></span>
                                        <span class="color-red" data-style="red"></span>
							        </span>
							</span>

        </div>
        <!-- END STYLE CUSTOMIZER-->
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        @if(isset($rota->transacao) && ($rota->transacao->rota <> 'controle'))
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{ route('controle.home') }}">Home</a> <span class="divider">/</span>
                </li>
                @if(isset($rota->transacao->categoria))
                    <li><a href="#">{{ $rota->transacao->categoria->nome }}</a> <span class="divider">/</span></li>
                    <li><a href="#">{{ $rota->transacao->nome }}</a> <span class="divider">/</span></li>
                    <li>{{ $rota->permissao }}</li>

                @endif
            </ul>
        @else
            <h3 class="page-title">
                Bem vindo(a) a sua área adminstrativa
                <small></small>
            </h3>
            @endif
                    <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->