<div class="panel panel-default">
    <div class="panel-heading info">
        <h4>

{{--            {{dd($guardia->directorio['nombre'])}}--}}
            <strong> {{  $directorio->departamento->estructuragerencia->gerencia }} </strong> <br/><br/>
                               <em>   {{"   ".  $directorio->nombre . " ". $directorio->apeidoPaterno." ".$directorio->apeidoMaterno  }}</em>
        </h4>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr class="warning">
            <th class="col-xs-1">#</th>
            <th class="col-xs-1">Ficha</th>
            <th class="col-xs-2">Nombre</th>
            <th class="col-xs-1">Micro</th>
            <th class="col-xs-1">Celular</th>
            @if (Auth::check())
                <th class="col-xs-1">Acción</th>
            @endif
            {{--<th class="col-xs-2">Compañia</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($directorio->guardia_programa as $guardia)
{{--        {{$guardia::first()->directorio as $directorio}}--}}
            <tr>
{{--                <td>{{$guardia->tipoguardia->tipoguardia}}</td>--}}
                <td>{{$guardia->programaGuardia}}</td>
                {{--<td>{{$directorio->nombre . " ". $directorio->apeidoPaterno." ".$directorio->apeidoMaterno}}</td>--}}
                {{--<td>{{$directorio['nombre'] ." ". $directorio['apeidoPaterno'] ." " . $directorio['apeidoMaterno']}}</td>--}}
                <td>{{$guardia->directorio->numExt}}</td>
                <td>{{$guardia->directorio->numCelular}}</td>
                <td>{{$guardia->Comentario}}</td>
                {{--@if (Auth::check())--}}
                    {{--<td>--}}
                        {{--<a href="{{route('guardias.edit', $directorio['id']) }}"  class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>--}}
                        {{--<a href="{{route('guardias.destroy', $directorio['id']) }}" onclick="return confirm('Deseas borrar este registro')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>--}}
                    {{--</td>--}}
                {{--@endif--}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<br>