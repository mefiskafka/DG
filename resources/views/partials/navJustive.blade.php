
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