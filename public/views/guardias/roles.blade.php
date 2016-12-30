@extends('layout.principal')
@section('content')
        <!-- Example row of columns -->
<div class="row">
    <br/>
    <br/>
    <h2 class="sub-header">Rol de Guardias</h2>
    {{-- @foreach($personals as $guardia) --}}
    @foreach($roles as $gerencias)
        <div class="table-responsive">
            @if (Auth::check())
                <a  href="{{ route('guardias.create')  }}" class="btn btn-success espacio">Registrar Nueva Guardia</a>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading info">
                    <h4>
                        <em> <span class="label label-warning">    {{"   ".  $gerencias->   }} </span></em>
                    </h4>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr class="warning">
                        <th class="col-xs-1">Nombre</th>
                        <th class="col-xs-1">Micro</th>
                        <th class="col-xs-1">Celular</th>
                        <th class="col-xs-1">Tipo de Guardia</th>
                        @if (Auth::check())
                            <th class="col-xs-1">Acción</th>
                        @endif
                        {{--<th class="col-xs-2">Compañia</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gerencias->departamento as $p)
                        @foreach($p->directorio as $persona)
                            @include('partials/fichas_guardias')
                        @endforeach
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
