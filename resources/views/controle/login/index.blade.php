<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Dados de Acesso</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
    {!! HTML::style('/assets/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('/assets/font-awesome/css/font-awesome.css') !!}
    {!! HTML::style('/assets/css/style.css') !!}
    {!! HTML::style('/assets/css/style_responsive.css') !!}
    {!! HTML::style('/assets/css/style_default.css') !!}
    {!! HTML::style('/assets/uniform/css/uniform.default.css') !!}
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
  <!-- BEGIN LOGO -->
  <div id="logo" class="center">
    <img src="/assets/img/logo_bredi.jpg" alt="BREDI" class="center" />
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    @yield('login')
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
    {{ date('Y') }} &copy; Bredi Tecnologia Digital.
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  {!! HTML::script('assets/js/jquery-1.8.2.min.js') !!}
  {!! HTML::script('assets/bootstrap/js/bootstrap.min.js') !!}
  {!! HTML::script('assets/js/jquery.blockui.js') !!}
  {!! HTML::script('assets/js/app.js') !!}
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>