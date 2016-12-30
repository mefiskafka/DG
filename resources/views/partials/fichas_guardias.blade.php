            <tr>
                <td> <em> {{"   ".  $persona->nombre . " ". $persona->apeidoPaterno." ".$persona->apeidoMaterno  }}</em></td>
                <td>{{ $persona->numExt}}</td>
                <td>{{$persona->numCelular}}</td>
                <td>
                @foreach($persona->Guardia as $FechaGuardia)
                              <em><span class="label label-warning">   {{" ". $FechaGuardia->programaGuardia}}</span></em>
                @endforeach
                </td>

                @if (Auth::check())
                    <td>
                        <a href="{{route('guardias.edit', $personas['id']) }}"  class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a href="{{route('guardias.destroy', $personas['id']) }}" onclick="return confirm('Deseas borrar este registro')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </td>
                @endif
            </tr>
