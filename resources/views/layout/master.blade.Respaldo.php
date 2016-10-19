<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Alfonso Gomez Zuñiga">
    <link rel="icon" href="">

    <title>GCSPM</title>

      {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">--}}
      {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">--}}


   {{--<script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>--}}
{{--      <script src="{{ asset('assets/js/select.js')}}"></script>--}}
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

      {{--<script type="application/javascript">--}}

          {{--$(document).ready(function() {--}}
{{--//        debugger;--}}
              {{--$('select[name="estructuragerencia_id"]').on('change', function() {--}}
                  {{--var estructuragerencia_id = $(this).val();--}}
                  {{--if(estructuragerencia_id) {--}}
                      {{--$.ajax({--}}
                          {{--dataType: "json",--}}
                          {{--type: "GET",--}}
                          {{--url: 'create/ajax/'+estructuragerencia_id,--}}
                          {{--success:function(data) {--}}
{{--//              alert(data);--}}
                              {{--$('select[name="departamento"]').empty();--}}
                              {{--$.each(data, function(key, value) {--}}
                                  {{--$('select[name="departamento"]').append('<option value="'+ key +'">'+ value +'</option>');--}}
                              {{--});--}}
                          {{--}--}}
                      {{--});--}}
                  {{--}else{--}}
                      {{--$('select[name="departamento"]').empty();--}}
                  {{--}--}}
              {{--});--}}
          {{--});--}}
      {{--</script>--}}


  </head>

  <body  id="app-layout">
  {{--@include('partials\nav')--}}
 <div class="container">
   {{--@include('partials\navJustive')--}}
    @yield('content')
        <!-- Site footer -->
        <footer class="footer">
          <p>&copy; 2016 PEMEX.</p>
        </footer>

 </div> <!-- /container -->


{{--  <script src="{{asset('assets/js/jquery-2.2.3.min.js')}}"></script>--}}
  {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>--}}
  {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}

  {{--<script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>--}}
  {{--<script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>--}}

  {{--<script src="{{ HTML::script('assets/js/bootstrap.min.js')}}"></script>--}}

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <!-- <script src="{{URL::script('assets/js/ie10-viewport-bug-workaround.js')}}"></script> -->
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
