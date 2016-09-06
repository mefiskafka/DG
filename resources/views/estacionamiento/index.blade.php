@extends('layout.master')

@section('content')
        <!-- Example row of columns -->
<div class="row">
    <br/>
    <br/>
    <h2 class="sub-header">Parque Vehicular de la GCSPM</h2>
    <div class="table-responsive">

        <a  href="{{ route('estacionamiento.create')  }}" class="btn btn-info espacio">Registrar Nuevo</a>


        {{--<div class="alert alert-warning alert-dismissible fade in" role="alert">--}}
        {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
        {{--<span aria-hidden="true">&times;</span>--}}
        {{--</button>--}}
        {{--<strong>Holy guacamole!</strong> You should check in on some of those fields below.--}}
        {{--</div>--}}

        {{--@include('flash::message')--}}


        @if (session()->has('flash_notification.message'))
            <div class="alert alert-{{ session('flash_notification.level') }} alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                {!! session('flash_notification.message') !!}
            </div>
        @endif



        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Estacionamiento</th>
                <th>Descripción</th>
                <th>Accción</th>

                {{--<th>Compañia</th>--}}
            </tr>
            </thead>
            <tbody>
            {{--{{dd($directorios)}}--}}
            @foreach($estacionamientos as $e )
                {{--                {{dd($directorio)}}--}}

                <tr>
                    <td>{{$e->id}}</td>
                    <td>{{$e->nombre}}</td>
                    <td>{{$e->descripcion}}</td>
                     <td>
                        <a href="{{route('estacionamiento.edit', $e->id) }}"  class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a href="{{route('estacionamiento.destroy', $e->id) }}" onclick="return confirm('Deseas borrar este registro')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div><!--FIn row-->
@stop
