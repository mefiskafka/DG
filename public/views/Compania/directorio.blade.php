@extends('layout.master')

@section('content')
<!-- Example row of columns -->
<div class="row">
    <br/>
    <br/>
    <h2 class="sub-header">Clasificación de Compañias</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Orden</th>
                <th>Compañia</th>
                <th>Acción</th>

            </tr>
            </thead>
            <tbody>
            @foreach($companias as $compania )
            <tr>
                <td>{{$compania->id}}</td>
                <td>{{$compania->compania}}</td>
                <td>
                    <a href="{{url('Compania/')}}/{{$compania->id}}" class="btn btn-success">Modificar</a>
                    <a href="{{url('Compania/destroy')}}/{{$compania->id}}" class="btn btn-danger">Eliminar</a>
                </td>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
