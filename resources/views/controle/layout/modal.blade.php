<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
{{--<div id="widget-config" class="modal hide">--}}
    {{--<div class="modal-header">--}}
        {{--<button data-dismiss="modal" class="close" type="button">×</button>--}}
        {{--<h3>Confirmar Exclusão</h3>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
        {{--<p>Tem certeza que deseja excluir?</p>--}}
    {{--</div>--}}
{{--</div>--}}

<div id="modalConfirma" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel3">Confirmar Exclusão</h3>
    </div>
    <div class="modal-body">
        <p>Tem certeza que deseja excluir?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <button data-dismiss="modal" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    </div>
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->