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

    <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('datePicker/css/bootstrap-datepicker.standalone.css')}}">

{{--    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>--}}
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>


    <!-- Datepicker Files -->
    {{--<!--href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}"-->--}}
    <link rel="stylesheet" href="{{URL::asset('datePicker/css/bootstrap-datepicker3.css')}}">


    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

    <!-- Bootstrap core CSS -->
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <link href="{{ URL::asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet" type="text/css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/justified-nav.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><!--<script src="../../assets/js/ie8-responsive-file-warning.js"></script>--><![endif]-->
    {{--<script src="assets/js/ie-emulation-modes-warning.js"></script>--}}
    {{--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">--}}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<style type="text/css">

  .espacio{
      margin: 10px 0;
  }

</style>

    <script>
//      $('#flash-overlay-modal').modal();
//$(".alert").alert()
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
//        debugger;
        $('select[name="estructuragerencia_id"]').on('change', function() {
          var estructuragerencia_id = $(this).val();
          if(estructuragerencia_id) {
            $.ajax({
              dataType: "json",
              type: "GET",
              url: 'create/ajax/'+estructuragerencia_id,
              success:function(data) {
//              alert(data);
                $('select[name="departamento"]').empty();
                $.each(data, function(key, value) {
                  $('select[name="departamento"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
              }
            });
          }else{
            $('select[name="departamento"]').empty();
          }
        });
      });
    </script>

  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Libreta de direcciones para GCSPM</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="{{ route('dg.Libreta.index') }}"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="Micuenta">Período Vacacional</a></li>
            <li><a href="{{ route('paseVehicular.index') }}">Pase Vehicular</a></li>
            {{--<li><a href="Compania">Compañias</a></li>--}}
            {{--<li><a href="Puesto">Puestos</a></li>--}}
            <li><a href="Guardia">Programa de Guardia</a></li>



            <li> <a href="LOGIN">Salir</a></li>

          </ul>
        </nav>
      </div>


  @yield('content')

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 PEMEX.</p>
      </footer>

    </div> <!-- /container -->


    <script src="{{ HTML::script('assets/js/bootstrap.min.js')}}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="{{URL::script('assets/js/ie10-viewport-bug-workaround.js')}}"></script> -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
