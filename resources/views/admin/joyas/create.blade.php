@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['joyas.store'],'method'=>'POST','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
             

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>

                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',null ,['class'=>'form-control']) !!}
                </div>

            
<!-- 
                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/joyas/foto.jpg">
                    {!! Form::file('urlfoto') !!}
                </div> -->

            </div>
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection