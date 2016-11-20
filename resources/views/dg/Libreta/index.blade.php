@extends('layout.principal')

@section('content')
<!-- Example row of columns -->
<div class="row">
    <br/>
    <br/>
    <h2 class="sub-header">Directorio Telefónico GCSPM</h2>
    <div class="table-responsive">

        @if (Auth::check())
        <a  href="{{ route('dg.Libreta.create')  }}" class="btn btn-success espacio">Registrar Nuevo</a>
        @endif

        @if (session()->has('flash_notification.message'))
                <div class="alert alert-{{ session('flash_notification.level') }} alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {!! session('flash_notification.message') !!}
                </div>
        @endif

        @foreach($departamentos as $departamento )
                    @include('partials/Libreta_directorio')
        @endforeach

    </div>

</div><!--FIn row-->
@stop
