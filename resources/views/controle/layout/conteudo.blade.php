@extends('controle.layout.principal')
@section('conteudo')
<!-- BEGIN PAGE CONTENT-->
<div id="page" class="dashboard">
    <div class="row-fluid">
        <div class="span12 responsive" data-tablet="span12 fix-margin" data-desktop="span12">
            <!-- BEGIN CALENDAR PORTLET-->
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-ok"></i>Calendar</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									</span>
                </div>
                <div class="widget-body">
                    <div id="calendar" class="has-toolbar"></div>
                </div>
            </div>
            <!-- END CALENDAR PORTLET-->
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->
@endsection