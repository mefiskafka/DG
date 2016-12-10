@extends('layout.principal')

@section('content')
<!-- Example row of columns -->
<div class="row">
    <br/>
    <br/>
    <h2 class="sub-header">Guardias</h2>
    <div class="table-responsive">

        @if (Auth::check())
        <a  href="{{ route('guardias.create')  }}" class="btn btn-success espacio">Registrar Nueva Guardia</a>
        @endif



        @foreach($personas as $personal )
                    @include('partials/fichas_guardias')
        @endforeach

    </div>

</div><!--FIn row-->
@stop
