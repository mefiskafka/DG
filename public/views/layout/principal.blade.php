<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Alfonso Gomez Zuñiga">
    <link rel="icon" href="../../favicon.ico">

    <title>GCSPM</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

{{--    <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>--}}
    <script src="{{ asset('assets/js/select.js')}}"></script>
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><!--<script src="../../assets/js/ie8-responsive-file-warning.js"></script>--><![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
    {{--    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>--}}


    <link href="{{URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/calendario.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/siderbarIzquierda.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('datePicker/css/bootstrap-datepicker.standalone.css')}}"  rel="stylesheet" type="text/css" >
    <link href="{{URL::asset('datePicker/css/bootstrap-datepicker3.css')}}"  rel="stylesheet" >
    <link href="{{URL::asset('assets/css/justified-nav.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>


    <script>
        //      $('#flash-overlay-modal').modal();
        //$(".alert").alert()
    </script>

</head>

<body>
@include('partials\nav')
<div class="container">
   @yield('content')
 </div>
    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; 2016 PEMEX.</p>
    </footer>

</div> <!-- /container -->

<script src="{{ HTML::script('assets/js/bootstrap.min.js')}}"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="{{URL::script('assets/js/ie10-viewport-bug-workaround.js')}}"></script> -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>