<div class="panel panel-default">
    <div class="panel-heading info">
        <h4>

{{--            {{dd($guardia->directorio['nombre'])}}--}}
                     <strong> {{  $personal->directorio->departamento->estructuragerencia->gerencia }} </strong> <br/><br/>
                               <em> <span class="label label-warning">    {{"   ".  $personal->programaGuardia   }} </span></em>
                               {{--<em><span class="label label-success">   {{"           ".  $personal->rolguardia->rolGuardia   }}</span></em>--}}


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
{{--        @foreach($personal->directorio as $guardia)--}}

            <tr>
                <td> <em> {{"   ".  $personal->directorio->nombre . " ". $personal->directorio->apeidoPaterno." ".$personal->directorio->apeidoMaterno  }}</em></td>
                       <td>{{ $personal->directorio->numExt}}</td>
                <td>{{$personal->directorio->numCelular}}</td>
                <td>{{ $personal->tipoguardia->tipoguardia}}</td>

                @if (Auth::check())
                    <td>
                        <a href="{{route('guardias.edit', $personal['id']) }}"  class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a href="{{route('guardias.destroy', $personal['id']) }}" onclick="return confirm('Deseas borrar este registro')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </td>
                @endif
            </tr>
        {{--@endforeach--}}
        </tbody>
    </table>
</div>
<br>