@extends('layouts.appfront')

@section('content')
<div class="container  pb-5">
    <div class="row">
        <div class="col-sm-12">
        <div class="col-sm-5">
            <h2 class=" linea text-dark text-right" style="font-family:LemonMilk;"><span>Contacto</span></h2>
        </div>
        </div>

        <div class="col-sm-8 bg-white p-5">
            <!-- <h2>DATOS DE CONTACTO</h2>
                <ul>
                    <li>Razón Social: {{$config->razonsocial}}</li>
                    <li>Dirección: {{$config->direccion}}</li>
                    <li>Celular: {{$config->celular}}</li>
                    <li>email: {{$config->email}}</li>
                </ul>


            <h2 class="mt-5">FORMULARIO</h2> -->
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{\Session::get('success')}}</li>
                </ul>
            </div>
            @endif


            <form action="/contactoenvio" method="post" style="font-family:CaviarDreams;">
                        <div class="form-group col-sm-12" style="display: inline-flex;">
                        <div class="col-sm-4">
                        <label for="nombre">*Nombre: </label>
                        </div>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" style="background:#C4C4C4;  ">
                        </div>
                        </div>
              
                    <div class="form-group col-sm-12" style="display: inline-flex;">
                    <div class="col-sm-4">
                      <label for="email">*Email: </label>
                      </div>
                      <div class="col-sm-8">
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" style="background:#C4C4C4;">
                      </div>
                    </div>
      
                    <div class="form-group col-sm-12" style="display: inline-flex;">
                    <div class="col-sm-4">
                        <label for="nombre">*Telefono: </label>
                        </div>
                        <div class="col-sm-8" style="display: inline-flex;">
                        <input type="text" class="form-control" name="lada" id="lada" placeholder="lada"  maxlength="3" style="background:#C4C4C4; width: 30%;"> 
                        <input type="text" class="form-control" name="numero" id="numero" placeholder="numero" maxlength="7" style="background:#C4C4C4;"> 
                        </div>
                        </div>
                    
                    <div class="form-group" >
                      <label for="mensaje">*Mensaje</label>
                      <textarea class="form-control" name="mensaje" id="mensaje" rows="3" style="background:#C4C4C4;"></textarea>
                    </div>

                    <input type="submit" class="btn btn-danger" name="btnenviar" value="ENVIAR MENSAJE" style="background:#EDC01890; color:black; border: 0;">
                 
            </form>


        </div>
        <!-- <div class="col-sm-4 bg-light">
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1018442939003!2d-86.8360678855906!3d21.148344889062205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2bbfff99a2c1%3A0xbb13ea1e52a69879!2sContel%20y%20Ferraez!5e0!3m2!1ses-419!2smx!4v1618253376736!5m2!1ses-419!2smx" width="100%" class="vh-100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div> -->
        

    </div>
</div>
@endsection