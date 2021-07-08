@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['carruselgaleria.store'],'method'=>'POST','files'=>true]) !!}

            <div class="jumbotron">

            <div class="form-group">
                    <label for="title">INGRESE TITULO</label>
                    {!! Form::text('title',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
               


                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::text('descripcion',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>

                <div class="form-group">
                    <label for="link">INGRESE LINK</label>
                    {!! Form::text('link',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/carruselGaleria/foto.jpg">
                    {!! Form::file('urlfoto') !!}
                </div>
                <div class="form-group">
                    <label for="codigo">INGRESE CODIGO</label>
                    {!! Form::text('codigo',null ,['class'=>'form-control']) !!}
                </div>

            </div>
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection