
@extends('layout.principal')

@section('title', 'Editando Nombre Estacionamiento')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($estacionamiento, ['method' => 'PATCH','route' => ['estacionamiento.update', $estacionamiento->id]]) !!}
            {{csrf_field()}}

            <br/>
            <br/>
            <br/>

            <fieldset>
                <legend>Agregar estacionamiento</legend>
                {{--Nombre Descripcion Estacionamiento--}}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre:') !!}
                            {!! Form::text('nombre',null, ['class' => 'form-control input-md', 'placeholder' => 'Escribe Nombre', 'required']) !!}

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripción:') !!}
                            {!! Form::text('descripcion',null, ['class' => 'form-control input-md', 'placeholder' => 'Descripción']) !!}
                        </div>
                    </div>
                </div>




            </fieldset>
            <div class="form-group">

                {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-danger" href="{{ route('estacionamiento.index') }}"> Regresar</a>

            </div>

            {!! Form::close() !!}
        </div>
    </div>


@stop
