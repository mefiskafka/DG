
@extends('layout.principal')

@section('title', 'Agregar Nuevo Pase vehicular')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(['route' => 'paseVehicular.store', 'method' => 'POST']) !!}
            {{csrf_field()}}

            <br/>
            <br/>
            <br/>

            <fieldset>
                <legend>Crear Número Pase Vehicular</legend>
                {{--Nombre Descripcion Estacionamiento--}}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            {!! Form::label('numPase', 'Pase Vehicular:') !!}
                            {!! Form::text('numPase',null, ['class' => 'form-control input-md', 'placeholder' => 'Número de Pase', 'required']) !!}

                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            {!! Form::label('type','nombre') !!}

                            <div class=".col-xs-6 .col-md-4">

                                {{ Form::select('directorio_id', array('' => 'Seleccione Nombre ') + $directorio, null, array('class' => 'form-control')) }}

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            {!! Form::label('type','nombre') !!}

                            <div class=".col-xs-6 .col-md-4">

                                {{ Form::select('estacionamiento_id', array('' => 'Seleccione Nombre Estacionamiento ') + $estacionamiento, null, array('class' => 'form-control')) }}

                            </div>
                        </div>
                    </div>

                </div>




            </fieldset>
            <div class="form-group">

                {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-danger" href="{{ route('paseVehicular.index') }}"> Regresar</a>

            </div>

            {!! Form::close() !!}
        </div>
    </div>


@stop
