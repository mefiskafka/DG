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
            <li> <a href="{{ url('/logout')}}">Salir</a></li>

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
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="{{URL::script('assets/js/ie10-viewport-bug-workaround.js')}}"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
