<div class="panel panel-default">
    <div class="panel-heading info">
        <h4>
            {{$departamento->departamento }}
        </h4>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr class="warning">
            <th class="col-xs-1">#</th>
            <th class="col-xs-1">Ficha</th>
            <th class="col-xs-2">Nombre</th>
            {{--<th class="col-xs-2">Gerencia/Activo</th>--}}
            <th class="col-xs-2">Puesto</th>
            <th class="col-xs-1">Micro</th>
            <th class="col-xs-1">Celular</th>
            @if (Auth::check())
                <th class="col-xs-1">Acción</th>
            @endif
            {{--<th class="col-xs-2">Compañia</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($departamento->directorio as $directorio)
            <tr>
                <td>{{$directorio->id}}</td>
                <td>{{$directorio->Ficha}}</td>
                <td>{{$directorio->nombre ." ". $directorio->apeidoPaterno ." " . $directorio->apeidoMaterno}}</td>
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
<br>