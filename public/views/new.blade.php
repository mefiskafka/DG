<?php
/**
 * Created by PhpStorm.
 * User: 97019594
 * Date: 11/07/2016
 * Time: 03:16 PM
 */


@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open(['route' => 'diretorio.store', 'method' => 'post', 'novalidate']) !!}
                <div class="form-group">
                    {!! Form::label('Ficha', 'Ficha') !!}
                    {!! Form::text('Ficha', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('apeidoPaterno', 'Apeido') !!}
                    {!! Form::text('apeidoPaterno', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('apeidoMaterno', 'Apeido') !!}
                    {!! Form::text('apeidoMaterno', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('emailTrabajo', 'email') !!}
                    {!! Form::text('emailTrabajo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection