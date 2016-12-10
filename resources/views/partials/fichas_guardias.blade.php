

{{--{{dd($personas)}}--}}
            <tr>
                <td> <em> {{"   ".  $guardia->nombre . " ". $guardia->apeidoPaterno." ".$guardia->apeidoMaterno  }}</em></td>
                <td>{{ $guardia->numExt}}</td>
                <td>{{$guardia->numCelular}}</td>
                <td>{{ $guardia->tipoguardia}}</td>

                @if (Auth::check())
                    <td>
                        <a href="{{route('guardias.edit', $personas['id']) }}"  class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a href="{{route('guardias.destroy', $personas['id']) }}" onclick="return confirm('Deseas borrar este registro')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </td>
                @endif
            </tr>

