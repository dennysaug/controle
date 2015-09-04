</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div id="footer">
    {{ date('Y') }} &copy; Conquer. Admin Dashboard Template.
    <div class="span pull-right">
        <span class="go-top"><i class="icon-arrow-up"></i></span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="/assets/js/jquery-1.8.2.min.js"></script>
<script src="/assets/jQuery-slimScroll/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/assets/jQuery-slimScroll/slimScroll.min.js"></script>
<script src="/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.blockui.js"></script>
<script src="/assets/js/jquery.cookie.js"></script>
<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="/assets/js/excanvas.js"></script>
<script src="/assets/js/respond.js"></script>
<![endif]-->
{{--<script src="/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>--}}
{{--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>--}}
{{--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>--}}
{{--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>--}}
{{--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>--}}
{{--<script src="/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>--}}
<script src="/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
{{--<script src="/assets/jquery-knob/js/jquery.knob.js"></script>--}}
{{--<script src="/assets/flot/jquery.flot.js"></script>--}}
{{--<script src="/assets/flot/jquery.flot.resize.js"></script>--}}

<script type="text/javascript" src="/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>

<script src="/assets/js/jquery.peity.min.js"></script>
<script type="text/javascript" src="/assets/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="/assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.pulsate.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="/assets/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="/assets/js/app.js"></script>
{!! HTML::script('/assets/js/controle/funcoes.js') !!}
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.setMainPage(true);
        App.init();
        if(localStorage.getItem('style_color'))
            $('#style_color').attr('href',localStorage.getItem('style_color'));

    });
</script>
@yield('script')

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>