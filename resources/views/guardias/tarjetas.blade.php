@extends('layout.principal')
@section('content')
        <!-- Example row of columns -->
<div class="row">
    <br/>
    <br/>
    <h2 class="sub-header">Rol de Guardias</h2>
    @if (Auth::check())
        <a  href="{{ route('guardias.create')  }}" class="btn btn-success espacio">Registrar Nueva Guardia</a>
    @endif
    @foreach($tarjetas as $g)
        <div class="table-responsive">
            <div class="panel panel-default">
                <div class="panel-heading info">
                    <h4>
                        <em> <span class="label label-warning">    {{"   ".  $g->programaGuardia   }} </span></em><br/>
{{--                        <em> <span class="label label-warning">    {{"   ".  $gerencias->programaGuardia   }} </span></em><br/>--}}
                        {{--<em> <span class="label label-success">    {{"   ".  $guardia->pivot->programaGuardia }} </span></em>--}}
                    </h4>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr class="warning">
                        <th class="col-xs-3">Nombre</th>
                        <th class="col-xs-1">Area</th>
                        <th class="col-xs-1">Extensión</th>
                        {{--<th class="col-xs-1">Celular</th>--}}
                        <th class="col-xs-1">Rol</th>

                        {{--<th class="col-xs-1">Tipo de Guardia</th>--}}
                        @if (Auth::check())
                            <th class="col-xs-1">Acción</th>
                        @endif
                        {{--<th class="col-xs-2">Compañia</th>--}}
                    </tr>
                    </thead>
                    <tbody>

                {{--@foreach($gerencias->directorio->departamento->estructuragerencia as $guardia)--}}
                    @foreach($g->PersonalGuardia as $gerencias)
                        <tr>
                            <td> <em> {{"   ".  $gerencias->nombre . " ". $gerencias->apeidoPaterno." ".$gerencias->apeidoMaterno  }}</em></td>
                            <td>{{ $gerencias->departamento->estructuragerencia->abreviatura}}</td>
                            <td>{{ $gerencias->numExt}}</td>
{{--                            <td>{{$gerencias->numCelular}}</td>--}}
                            <td>{{$gerencias}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <br>
        </div>
        <br/>

    @endforeach
</div><!--FIn row-->
@stop