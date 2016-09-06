
@extends('layout.master')

@section('title', 'Editando Nombre Estacionamiento')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($paseVehicular, ['method' => 'PATCH','route' => ['paseVehicular.update', $paseVehicular->id]]) !!}
            {{csrf_field()}}

            <br/>
            <br/>
            <br/>

            <fieldset>
                <legend>Agregar estacionamiento</legend>
                {{--Nombre Descripcion Estacionamiento--}}

                <div class="row">

                    <div class="col-lg-4">

                        <div class="form-group">

                            {!! Form::label('type','Directorio') !!}

                            <div class=".col-xs-6 .col-md-4">
                                {{ Form::select('directorio_id', $directorio, null, array('id' => 'directorio_id','class' => 'form-control', 'readonly')) }}
                                {{--                                {{ Form::select('estacionamiento_id', $estacionamiento, Input::old('estacionamiento_id'))}}--}}
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="form-group">
                            {!! Form::label('type','Estacionamiento') !!}

                            <div class=".col-xs-6 .col-md-4">
                                {{ Form::select('estacionamiento_id', $estacionamiento, null, array('id' => 'estacionamiento_id','class' => 'form-control')) }}
{{--                                {{ Form::select('estacionamiento_id', $estacionamiento, Input::old('estacionamiento_id'))}}--}}
                            </div>
                        </div>
                    </div>



                    {{--<div class="col-lg-4">--}}
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('directorio_id', 'Nombre:') !!}--}}
                            {{--{!! Form::text('directorio_id',$paseVehicular->directorio->nombre, ['class' => 'form-control input-md', 'placeholder' => 'Descripción']) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

                <div class="row">

                </div>


                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            {!! Form::label('numPase', 'Número de pase:') !!}
                            {!! Form::text('numPase',null, ['class' => 'form-control input-md', 'placeholder' => 'Escribe Numero de pase', 'required']) !!}

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
