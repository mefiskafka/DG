@extends('layout.master')

@section('content')
<!-- Example row of columns -->
<div class="row">
    <br/>
    <br/>
    <h2 class="sub-header">Directorio Telefonico</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ficha</th>
                    <th>Nombre</th>
                    <th>Gerencia/Activo</th>
                    {{--<th>Coordinación</th>--}}
                    <th>Puesto</th>
                    <th>Micro</th>
                    <th>Celular</th>
                    <th>Acción</th>
                    {{--<th>Compañia</th>--}}
                </tr>
            </thead>
            <tbody>

            @foreach($directorios as $directorio )
            <tr>
                <td>{{$directorio->id}}</td>
                <td>{{$directorio->Ficha}}</td>
                <td>{{$directorio->nombre ." ". $directorio->apeidoPaterno ." " . $directorio->apeidoMaterno}}</td>
                <td>{{$directorio->estructuragerencia->gerencia}}</td>
                {{--<td>{{$diretorio->estructuragerencia->departamento->departamento}}</td>--}}
                <td>{{$directorio->puesto->puesto}}</td>
                <td>{{$directorio->numExt}}</td>
                <td>{{$directorio->numCelular}}</td>
                <td>
                    <a href="{{url('Libreta/')}}/{{$directorio->id}}" class="btn btn-success">Modificar</a>
                    <a href="{{url('Libreta/destroy')}}/{{$directorio->id}}" class="btn btn-danger">Eliminar</a>
                </td>


            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
