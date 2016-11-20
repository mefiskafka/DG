
@extends('layout.principal')

@section('title', 'Crear Trabajador')

@section('content')
<div class="row">
    <div class="col-lg-12">
    {!! Form::open(['route' => 'dg.Libreta.store', 'method' => 'POST']) !!}
        {{csrf_field()}}

        <br/>
        <br/>
        <br/>

        <fieldset>
            <legend>Creacion de directorio</legend>
            {{--Ficha Cumpleaños--}}
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        {!! Form::label('Ficha', 'Ficha:') !!}
                        {!! Form::text('Ficha',null, ['class' => 'form-control input-md', 'placeholder' => 'Escribe Ficha', 'required']) !!}
                        {{--<input id="Ficha" name="Ficha" value="{{$Ficha}}" type="text" placeholder="Escribe la Ficha" class="form-control input-md" required="required">--}}
                        {{--<span class="help-block">Ej. 325487</span>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('name', 'Cumpleaños:') !!}
                        {{--<label for="cumpleaños">Cumpleaños:</label>--}}
                        {{--id="datepicker"--}}
                        <div  class="input-append date input-group .col-md-4">
                            {!! Form::text('cumpleaños',null, ['class' => 'form-control', 'required', 'readonly']) !!}
                            {{--<input id="cumpleaños" name="cumpleaños" value="{{$cumpleaños}}" type="text" placeholder="Escribe Fecha Cumpleaños" class="form-control" readonly>--}}
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Nombre Completo--}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre:') !!}
                        {!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Escribe Nombre', 'required']) !!}
                        {{--<label for="Nombre">Nombre:</label>--}}
                        {{--<input id="nombre" name="nombre" value="{{$nombre}}" type="text" placeholder="Escribe Nombre" class="form-control">--}}
                        {{--<span class="help-block">Ej. Hector</span>--}}
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('name', 'Apellido Paterno:') !!}
                        {!! Form::text('apeidoPaterno',null, ['class' => 'form-control', 'placeholder' => 'Escribe Apellido Paterno', 'required']) !!}
                        {{--<label for="Apellido Paterno">Apellido Paterno:</label>--}}
                        {{--<input id="apeidoPaterno" name="apeidoPaterno" value="" type="text" placeholder="Escribe Apellido Paterno" class="form-control">--}}
                        {{--<span class="help-block">Ej. Hernández</span>--}}
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('name', 'Apellido Materno:') !!}
                        {!! Form::text('apeidoMaterno',null, ['class' => 'form-control', 'placeholder' => 'Escribe Apellido Materno']) !!}
                        {{--<label for="apeidoMaterno">Apellido Materno:</label>--}}
                        {{--<input id="apeidoMaterno" name="apeidoMaterno" value="" type="text" placeholder="Escribe Apellido Materno" class="form-control">--}}
                        {{--<span class="help-block">Ej. Escobar</span>--}}
                    </div>
                </div>
            </div>

            {{--Telefono--}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('name', 'Extensión:') !!}
                        {{--<label for="extension">Extensión:</label>--}}
                        <div class=".col-xs-6 .col-md-4">
                            {!! Form::text('numExt',null, ['class' => 'form-control input-md', 'placeholder' => 'Escribe extensión']) !!}
                            {{--<input id="extension" name="numExt" value="" type="text"  class="form-control input-md">--}}
                            {{--<span class="help-block">Ej. (811) 325689</span>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('name', 'Celular:') !!}
                        {{--<label for="Celular">Celular:</label>--}}
                        <div class=".col-xs-6 .col-md-4">
                            {!! Form::text('numCelular',null, ['class' => 'form-control input-md', 'placeholder' => 'Escribe num. de Celular']) !!}
                            {{--<input id="Celular" name="numCelular" value="" type="text"  class="form-control input-md">--}}
                            {{--<span class="help-block">Ej. 9933256829</span>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('name', 'Telefono casa:') !!}
                        {{--<label for="Casa">Casa:</label>--}}
                        <div class=".col-xs-6 .col-md-4">
                            {!! Form::text('numCasa',null, ['class' => 'form-control input-md', 'placeholder' => 'Escribe num. de Casa']) !!}
                            {{--<input id="Casa" name="numCasa" value="" type="text"  class="form-control input-md">--}}
                            {{--<span class="help-block">Ej. 9933256829</span>--}}
                        </div>
                    </div>
                </div>
            </div>

            {{--Datos de Gerencia--}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        {!! Form::label('type','Seleccione una Gerencia') !!}
                        <div class=".col-xs-6 .col-md-4">
                            {{ Form::select('estructuragerencia_id', array('' => 'Seleccione Gerencia o Administración') + $estructuragerencia, null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                 </div>
            </div>

            {{--Datos Coordinación--}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="title">Seleccione una Coordinación:</label>
                        <div class=".col-xs-6 .col-md-4">
                            <select name="departamento_id" class="form-control"></select>
                        </div>
                    </div>
                </div>
            </div>

            {{--Compañia Nivel Puesto--}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('type','Compañia:') !!}
                        <div class=".col-xs-6 .col-md-4">
                            {{ Form::select('compania_id', array('' => 'Seleccione Compañia') + $compania, null, array('class' => 'form-control')) }}
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('nivel', 'Nivel:') !!}
                        {{--<label for="compania">Compañia:</label>--}}
                        <div class=".col-xs-6 .col-md-4">
                            {!! Form::text('nivel',null, ['class' => 'form-control input-md', 'placeholder' => 'Escribe Nivel']) !!}
                            {{--<span class="help-block">Ej. PEMEX</span>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('type','Puesto:') !!}
                        <div class=".col-xs-6 .col-md-4">
                            {{ Form::select('puesto_id', array('' => 'Seleccione puesto') + $puesto, null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
            </div>

             {{--Correo de Trabajo--}}
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        {!! Form::label('emailTrabajo', 'E-mail de Trabajo:') !!}
                        {{--<label for="compania">Compañia:</label>--}}
                        <div class=".col-xs-6 .col-md-4">
                            {!! Form::text('emailTrabajo',null, ['class' => 'form-control input-md', 'placeholder' => 'Escribe Correo de trabajo']) !!}
                            {{--<span class="help-block">Ej. PEMEX</span>--}}
                        </div>
                    </div>

                </div>
            </div>

            {{--Correo Personal--}}
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        {!! Form::label('emailPersonal', 'E-mail Personal:') !!}
                        {{--<label for="compania">Compañia:</label>--}}
                        <div class=".col-xs-6 .col-md-4">
                            {!! Form::text('emailPersonal',null, ['class' => 'form-control input-md', 'placeholder' => 'Escribe Correo personal']) !!}
                            {{--<span class="help-block">Ej. PEMEX</span>--}}
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>
        <div class="form-group">
            {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="{{ route('dg.Libreta.index') }}"> Regresar</a>
        </div>

    {!! Form::close() !!}
    </div>
</div>


@stop
