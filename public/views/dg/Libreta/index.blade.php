@extends('layout.master')

@section('content')
<!-- Example row of columns -->
<div class="row">
    <br/>
    <br/>
    <h2 class="sub-header">Directorio de la Gerencia Construcción, Supervisión, Perforación y Mantenimiento</h2>
    <div class="table-responsive">


        @if (Auth::check())
        <a  href="{{ route('dg.Libreta.create')  }}" class="btn btn-info espacio">Registrar Nuevo</a>
        @endif

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
                    <th>Ficha</th>
                    <th>Nombre</th>
                    <th>Gerencia/Activo</th>
                    <th>Puesto</th>
                    <th>Micro</th>
                    <th>Celular</th>
                    @if (Auth::check())
                    <th>Acción</th>
                    @endif
                    {{--<th>Compañia</th>--}}
                </tr>
            </thead>
            <tbody>
{{--{{dd($directorios)}}--}}
            @foreach($directorios as $directorio )
{{--                {{dd($directorio)}}--}}

            <tr>
                <td>{{$directorio->id}}</td>
                <td>{{$directorio->Ficha}}</td>
                <td>{{$directorio->nombre ." ". $directorio->apeidoPaterno ." " . $directorio->apeidoMaterno}}</td>
                <td>{{$directorio->estructuragerencia->abreviatura}}</td>
                <td>{{$directorio->puesto->puesto}}</td>
                <td>{{$directorio->numExt}}</td>
                <td>{{$directorio->numCelular}}</td>
                @if (Auth::check())
                <td>
                    <a href="{{route('dg.Libreta.edit', $directorio->id) }}"  class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a href="{{route('dg.Libreta.destroy', $directorio->id) }}" onclick="return confirm('Deseas borrar este registro')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </td>
                @endif

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div><!--FIn row-->
@stop
