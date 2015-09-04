@include('controle.layout.doctype')
@include('controle.layout.head')
@include('controle.layout.topo')
@include('controle.layout.menu')

		<div id="body">
            @include('controle.layout.modal')
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
                @include('controle.layout.migalha')
                @yield('conteudo')
			</div>
			<!-- END PAGE CONTAINER-->		
		</div>
		<!-- END PAGE -->
@include('controle.layout.rodape')