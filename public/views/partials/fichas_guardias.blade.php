            <tr>
                <td> <em> {{"   ".  $persona->nombre . " ". $persona->apeidoPaterno." ".$persona->apeidoMaterno  }}</em></td>
                <td>{{ $persona->numExt}}</td>
                <td>{{$persona->numCelular}}</td>
                <td>
                @foreach($persona->TipoGuardia as $FechaGuardia)
                              <em><span class="label label-success">   {{"           ". $FechaGuardia->tipoguardia}}</span></em>
                              <em><span class="label label-warning">   {{"           ". $FechaGuardia->pivot->programaGuardia}}</span></em>
                @endforeach
                </td>

                @if (Auth::check())
                    <td>
                        <a href="{{route('guardias.edit', $personas['id']) }}"  class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a href="{{route('guardias.destroy', $personas['id']) }}" onclick="return confirm('Deseas borrar este registro')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </td>
                @endif
            </tr>
