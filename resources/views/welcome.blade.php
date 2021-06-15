@extends('layouts.appfront')

@section('content')
<style>
 @font-face{
        font-family:LemonMilk;
        src:url(fuentes/LEMONMILK-Regular.otf);
       }

.padre{
  display:flex;
  flex-flow:column nowrap;
  
}
  .section{
    display:flex;
  }
  .articulos{
    flex:2 1 auto;
    display: flex;
    flex-flow:row wrap;
  }
  .article{
    flex:1 1 40%;

  }
  .aside{
    flex:1 1 auto;
  }
  .publico{

  }
    #wrapper {
        position:relative;
    }
 
    #wrapper>div {
        width:430px;
        height:220px;
    }
 
    #div1 {
        background-color:Red;
    }
    #div2 {
        position: absolute;
        background-color: Green;
        top: 4%;
        left: 30%;
    }
      
    #principal li {
   display:inline;
   float:left;
}

#principal li {
   display:inline;
   float:left;
   width:100px;
   background-color:#f5f7f9;
   padding:5px;
   margin:10px;
   text-align: center;
   border-right: #a5a7aa solid 1px;
   border-bottom: #a5a7aa solid 1px;
}
.archive {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    grid-gap: 1em;
  }
  
  .article {
    padding: 1em;
    /* background: #71D7E4;
    box-shadow:
      0 5px 10px rgba(0, 0, 0, 0.1),
      0 20px 20px rgba(0, 0, 0, 0.05); */
  }

 


.demo-gallery > ul > li a { 
  border: 3px solid #FFF;
  border-radius: 3px;
  display: block;
  overflow: hidden;
  position: relative;
  float: left;
}
.demo-gallery > ul > li a > img {
  -webkit-transition: -webkit-transform 0.15s ease 0s;
  -moz-transition: -moz-transform 0.15s ease 0s;
  -o-transition: -o-transform 0.15s ease 0s;
  transition: transform 0.15s ease 0s;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  height: 100%;
  width: 100%;
}
.demo-gallery > ul > li a:hover > img {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
}
.demo-gallery > ul > li a:hover .demo-gallery-poster > img {
  opacity: 1;
}
.demo-gallery > ul > li a .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.1);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: background-color 0.15s ease 0s;
  -o-transition: background-color 0.15s ease 0s;
  transition: background-color 0.15s ease 0s;
}
.demo-gallery > ul > li a .demo-gallery-poster > img {
  left: 50%;
  margin-left: -10px;
  margin-top: -10px;
  opacity: 0;
  position: absolute;
  top: 50%;
  -webkit-transition: opacity 0.3s ease 0s;
  -o-transition: opacity 0.3s ease 0s;
  transition: opacity 0.3s ease 0s;
}
.demo-gallery > ul > li a:hover .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.5);
}
.demo-gallery .justified-gallery > a > img {
  -webkit-transition: -webkit-transform 0.15s ease 0s;
  -moz-transition: -moz-transform 0.15s ease 0s;
  -o-transition: -o-transform 0.15s ease 0s;
  transition: transform 0.15s ease 0s;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  height: 100%;
  width: 100%;
}
.demo-gallery .justified-gallery > a:hover > img {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
}
.demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
  opacity: 1;
}
.demo-gallery .justified-gallery > a .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.1);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: background-color 0.15s ease 0s;
  -o-transition: background-color 0.15s ease 0s;
  transition: background-color 0.15s ease 0s;
}
.demo-gallery .justified-gallery > a .demo-gallery-poster > img {
  left: 50%;
  margin-left: -10px;
  margin-top: -10px;
  opacity: 0;
  position: absolute;
  top: 50%;
  -webkit-transition: opacity 0.3s ease 0s;
  -o-transition: opacity 0.3s ease 0s;
  transition: opacity 0.3s ease 0s;
}
.demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.5);
}
.demo-gallery .video .demo-gallery-poster img {
  height: 48px;
  margin-left: -24px;
  margin-top: -24px;
  opacity: 0.8;
  width: 48px;
}
.demo-gallery.dark > ul > li a {
  border: 3px solid #04070a;
}
.home .demo-gallery {
  padding-bottom: 80px; 
}
h2 {
  font: 33px sans-serif;
  margin-top: 30px;
  text-align: center;
}
h2.lineaAmarilla {
  position: relative;
  z-index: 1;
}
h2.lineaAmarilla:before {
  border-top: 2px solid #edc018;
  content: "";
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  bottom: 0;
  width: 95%;
  z-index: -1;
}
h2.linea {
  position: relative;
  z-index: 1;
}
h2.linea:before {
  border-top: 2px solid black;
  content: "";
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  bottom: 0;
  width: 95%;
  z-index: -1;
}
h2.linea span {

  background: #fff;
  padding: 0 15px;
}
@media screen and (max-width:990px){
    #wrapper div {
        width:320px;
        height:220px;
    }
}
@media screen and (max-width:400px){
    .wrapper-div {
        width:320px !important;
        height:220px !important;
    }
    /* .blog{
      flex-wrap:nowrap;
    } */
}

    </style>

<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/lib/w3.css">
        <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
<!-- <iframe   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  width="1024" height="480" src="https://www.facebook.com/plugins/video.php?height=206&href=https%3A%2F%2Fwww.facebook.com%2FContelJewelry%2Fvideos%2F190230422821995%2F&show_text=false&width=560&t=0" style="width: 100%"></iframe> -->

<div class= "row section">
<div class= "col-sm-4 articulos" style="background-color:#E0DCDC">
<div class="article" style=" hight:258px; margin-top: 30px; margin-left: 25px;">
<p  style="font-family:LemonMilk; font-size: 24px; color:black;">
¿QUIERES TENER TU PROPIO NEGOCIO DE <strong> JOYERÍA EN ORO LAMINADO?</strong>
</p>
<p class="text-center" style="font-family:LemonMilk; line-height: 1; font-size:14px;">INTÉGRATE A NUESTRO EQUIPO DE</P>
<P class="text-center" style="font-family:LemonMilk; color:#921B61; line-height: 1; font-size:14px;"><strong>EMPRENDEDORAS</strong></P>
<P class="text-center" style="font-family:LemonMilk; line-height: 1; font-size:14px;"><strong>¡TE ENSEÑAMOS COMO HACERLO!</strong></p>
<h2 class="lineaAmarilla" style="bottom: 20px;" ></h2>
</div>
<div class="container article" style="background-color:#fff5f630;  margin-top: 10px; margin-bottom: 50px;">

<form  style=" margin-top: 10px; padding-top: 1px;" action="/contacto" method="post">
              
<div class="form-group" >
  <div style="margin-top: 30px;">
<p class="text-center" style="font-family:LemonMilk; line-height: 1; font-size:14px;">¡QUIERO SER <strong>EMPRENDEDORA!</strong></P>
</div>
                  <input style="font-family:LemonMilk; background-color: #D0656F30;" type="text" class="form-control" name="nombre" id="nombre" placeholder="NOMBRE:">
                </div>
              <div class="form-group">
               
                <input style="font-family:LemonMilk; background-color: #D0656F30;" type="email" class="form-control" name="email" id="email" placeholder="Email:">
              </div>
            
             
              
              <div class="form-group">
               
                <input style="font-family:LemonMilk; background-color: #D0656F30;" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" type="tel" class="form-control" id="phone" name="phone" placeholder="TELÉFONO:">
               
              </div>
              <div class="text-center">

              <input type="submit" class="btn  btn-radius" style="background-color: #EDC01890; color:black; border-radius: 100px; font-size: 0.7rem;"  name="btnenviar" value="ENVIAR">
              </div>
      </form>
</div>
  </div>
  <div class= "col-sm-8 aside" style="margin-top: 15px;">
  <div class="publico">
  <iframe id="muteYouTubeVideoPlayer" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="670" height="389" src="https://www.youtube.com/embed/{{$config->seo_urlvideo}}?autoplay=1&amp;controls=1&amp;showinfo=0&amp;modestbranding=1&amp;fs=0&amp;cc_load_policy=0&amp;iv_load_policy=3&amp;autohide=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Flocalhost%3A8000&amp;widgetid=1&amp;rel=0&amp;loop=1" style="width: 100%;"></iframe>
    </div>
    <div class="publico">
    <div class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @forelse ($carrusel as $item)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif"></li>
            @empty
            @endforelse
        </ol>
        <div class="carousel-inner">
        @forelse ($carrusel as $item)
          <div class="carousel-item @if($loop->index==0) active @endif">
              
            <img src="/img/carrusel/{{$item->urlfoto}}" class="d-block w-100 img-fluid" alt="{{$item->frase}}" style="image-rendering: pixelated;"> 
            <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12 carousel-caption  carousel-caption-slider pb-5" style="left: 0%!important; top: 5%!important; height: 15%;">
            <h2 style="font-family: 'Muli', sans-serif; font-weight:bold;">{{$item->encabezado}}</h2>
            <h4>{{$item->subencabezado}}</h4>
            </div>
            </div>
            <div class="carousel-caption carousel-caption-slider ml-auto mr-auto mx-auto" style="left:24%">  
         
            </div>

        
          </div>
        @empty
        @endforelse
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</div>


    </div>
  </div>
  </div>



</div>
<div class= "container">
<div class="col-sm-10">
  <h2 class=" linea text-dark text-right" style= "font-family:LemonMilk; font-size:30px;"><span>Tu eliges el tamaño de tu negocio</span></h2>
</div>
</div>
<div class= "padre container">
  <section class="section">
    <div class= "row ">
        <div class= "col-sm-6 articulos" style="">
          <div class="article" style=" ">
            <img src="/img/carrusel/chicamaletin.png" class="d-block w-100 img-fluid" alt="" style="image-rendering: pixelated;"> 
          </div>
        </div>
        <div class= "col-sm-6 articulos" style="">
          <article class="article" style=" ">
            <img src="/img/carrusel/diamante.png" class="d-block  img-fluid" alt="" style="image-rendering: pixelated;"> 
          </article>
          <article class="article" style=" ">
            <img src="/img/carrusel/esmeralda.png" class="d-block  img-fluid" alt="" style="image-rendering: pixelated;"> 
          </article>
          <article class="article" style=" ">
            <img src="/img/carrusel/ruby.png" class="d-block  img-fluid" alt="" style="image-rendering: pixelated;"> 
          </article>
          <article class="article" style=" ">
            <img src="/img/carrusel/zafiro.png" class="d-block  img-fluid" alt="" style="image-rendering: pixelated;"> 
          </article>
        </div>
      </div>
   </section> 
</div>
</div>


<div class="container">
@forelse ($posts as $r)
  

  <div class="row  text-center align-items-center bg-white">
    <div class="col-sm-6 " style="" >
      <p style= "font-family:LemonMilk; color:#F07F39;" class="text-center display-4" ><strong>función del cofre</strong><br></p>
      <p style= "font-family:LemonMilk;" class="text-center display-4"><strong style="color:#E8508A;">¡organiza!</strong><strong style="color:#D0656F;"> ¡Transporta!</strong><strong style="color:#921B61;"> ¡Vende!</strong></p>
      <p style= "" class="text-center display-4">Creamos cofres en donde podrás 
exhibir, almacenar y vender joyería en 
oro laminado de alta calidad de 
manera organizada y sencilla.</p>
      
    </div>
    <div id="wrapper" class="col-sm-6 pt-5 pb-5">
     
            <img src="/img/producto/cofre-diamante.png" alt="{{$r->nombre}}" class="img-fluid rounded-left">
    
    </div>
    </div>
    @empty
            
         @endforelse
</div>





<div class="container" style="margin-top:5%">
    
        <div class="row mb-4 mx-4" >
          <div class="col-sm-6  rounded-right bg-white row align-items-center">
                <div class="col-sm-12 card bg-light" style="text-align: left; height: 272px;">
                    <h3 class="text-black">Belé</h3>
                    <p>{{$config->frase_1}}</p>
                </div>
           </div>
          
           <div class="col-sm-6  rounded-right bg-white row align-items-center">
                <div class="col-sm-12 card  bg-light" style="text-align: right; height: 272px;">
                    <h3 class="text-black">Contel Jewelry</h3>
                    <p>{{$config->frase_2}}</p>
                    
                </div>
            </div>
        </div>
  
    
</div>

<div class= container>
<div class="row mt-5 mb-5 justify-content-center text-center align-items-center bg-success">
        <div class="col-sm-12 bg-white  pt-5 pb-5">
            <div class="row">
            <div class="col-sm-4">
                <h2 class=" linea text-dark text-right"><span>Cofres</span></h2>
            </div>
            <div class="col-sm-8">
            </div>
            @forelse ($producto as $item)
                <div class="col-sm-3">
                    <div class="card" style="background-color:#d8d3d3";>                
                    <div class="container">
                    <a href="/bele/{{$item->categoria->slug}}/{{$item->slug}}">
                            <img src="/img/producto/{{$item->urlfoto}}" class="card-img-top" alt="{{$item->nombre}}">
                        </a>
                    </div>
                       
                    </div>
                    <div class="card-footer"  style="background-color:#d8d3d3">
                        <p style="text-align: left;">{{$item->nombre}}</p>
                        <p style="text-align: left;">{{$item->porcentaje}}% ganancia</p>
                        <p style="text-align: left;">Precio ${{$item->precio}}</p>
                        <p style="text-align: left;">Ganancia ${{$item->ganancia}} </p>
                        <!-- <a href="/artesanias/{{$item->categoria->slug}}/{{$item->slug}}" class="btn btn-warning btn-block">{{$item->nombre}}</a> -->
                    </div>
                </div>
            @empty
            @endforelse
            </div>
        </div>
   
    </div>  
</div>



<!-- artesanias -->

<div class="container">
@forelse ($posts as $r)
  <div class="col-sm-8">
  <h2 class=" linea text-dark text-right"><span>Lo más reciente de nuestro blog</span></h2>

  </div>
  <div class="col-sm-4">
  </div>
  <div class="row  mt-5 mb-5 justify-content-center text-center align-items-center bg-white">
    <div class="col-sm-4 " style="left:10%" >
     <p class="text-black display-4" ><strong>{{$r->nombre}}</strong><br></p>
      <a href="/blog/{{$r->slug}}" class="btn btn-outline-dark">Leer más</a>
    </div>
    <div id="wrapper" class="col-sm-8 pt-5 pb-5">
     <div id="div2"  class="col-sm-12" style="background-color:black; left:25%";> 
     <!-- <img src="/img/post/por-que-lo-usamos.jpeg" alt="{{$r->nombre}}" class="img-fluid rounded-left">        -->
     </div>
    <div id="div1" class="col-sm-12" style="background-color:revert;" >
     <div class="col-sm-12 wrapper-div">
        <img src="/img/post/{{$r->urlfoto}}" alt="{{$r->nombre}}" class="img-fluid rounded-left">
     </div>               
                      
    </div>
    </div>
    </div>
    @empty
            
         @endforelse
</div>

<!-- Galeria /-->

<div class= container>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist" style="justify-content: center;">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pulseras</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Dijes</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Cadenas</a>
    <a class="nav-item nav-link" id="nav-contact2-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact2" aria-selected="false">Aretes</a>
    <a class="nav-item nav-link" id="nav-anillo-tab" data-toggle="tab" href="#nav-anillo" role="tab" aria-controls="nav-anillo" aria-selected="false">Anillos</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="demo-gallery">
        <ul id="lightgallery1" role="tabpanel" class="tab-pane fade show active list-unstyled row">
        @forelse ($pulceras as $item)
        <li style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->title}}</h4><p>{{$item->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
             </a>
        </li>                         
        @empty
            @endforelse
                               
            </ul>
        </div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <div class="demo-gallery">
  <ul id="lightgallery2" role="tabpanel" class="tab-pane fade show active list-unstyled row">
  @forelse ($dijes as $item)
        <li  style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
             </a>
        </li>                         
        @empty
            @endforelse
                          
  </ul>
  </div>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <div class="demo-gallery">
        <ul id="lightgallery3" role="tabpanel" class="tab-pane fade show active list-unstyled row">
        @forelse ($cadenas as $item)
        <li  style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
             </a>
        </li>                         
        @empty
            @endforelse
                    </ul>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact2-tab">
    <div class="demo-gallery">
        <ul id="lightgallery4" role="tabpanel" class="tab-pane fade show active list-unstyled row">
        @forelse ($aretes as $item)
        <li  style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
             </a>
        </li>                         
        @empty
            @endforelse
        </ul>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-anillo" role="tabpanel" aria-labelledby="nav-anillo-tab">
    <div class="demo-gallery">
        <ul id="lightgallery5" role="tabpanel" class="tab-pane fade show active list-unstyled row">
        @forelse ($anillos as $item)
        <li  style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
             </a>
        </li>                         
        @empty
            @endforelse
        </ul>
    </div>
  </div>
</div>

</div>

        


<div class="container">

    <div class=" row blog col-sm-12 mt-5 mb-5 justify-content-center text-center align-items-center bg-white" style="border: ridge;">
    @forelse ($testimonios as $r)  
        <div id="wrapper" class="col-sm-8 pt-5 pb-5">
            <div id="div2"  class="col-sm-12" style="background-color:black";>
            <!-- <img src= "/img/post/por-que-lo-usamos.jpeg" alt="{{$r->nombre}}" class="img-fluid rounded-left"> -->
            </div>
            <div id="div1" class="col-sm-12" style="background-color:revert;" >
                        <a href="/bele/{{$item->categoria->slug}}/{{$item->slug}}">
                        <img src="/img/Testimonios/{{$r->urlfoto}}" alt="{{$r->nombre}}" class="img-fluid rounded-left">
                        
                                <!-- <img src="/img/producto/{{$item->urlfoto}}" class="card-img-top" alt="{{$item->nombre}}"> -->
                            </a>
            </div>
           
        </div>
        <div class="col-sm-4" >
        <h2 class=" linea text-dark text-center"><span>Testimonios</span></h2>
      
        {!!$r->descripcion!!}   
      
        <p class="text-black"> <br>{{$r->nombre}}</p>
        <p class="font-anton text-black">{{$r->title}} <br></p>
        @empty
            @endforelse
        </div>
    </div>
</div>
<div class="container">
<!-- Modal gallery -->
<section class="">
  <!-- Section: Images -->
  <section class="">
    <div class="row">
    @forelse ($carrusel as $item)
    <div style="flex: 0 0 50%;" class="col-lg-3 col-md-12 mb-3 mb-lg-0">
        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
          <img src="/img/carrusel/{{$item->urlfoto}}" class="w-100"/>
          <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
        </div>
      </div>

     
    @empty
    @endforelse  

 

    </div>
  </section>
  <!-- Section: Images -->

  <!-- Section: Modals -->
  <section class="">
    <!-- Modal 1 -->
    <div
      class="modal fade"
      id="exampleModal1"
      tabindex="-1"
      aria-labelledby="exampleModal1Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
          
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 2 -->
    <div
      class="modal fade"
      id="exampleModal2"
      tabindex="-1"
      aria-labelledby="exampleModal2Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
           
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 3 -->
    <div
      class="modal fade"
      id="exampleModal3"
      tabindex="-1"
      aria-labelledby="exampleModal3Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Modals -->
</section>
<!-- Modal gallery -->
</div>

<!-- artesanias /-->

<!-- publicaciones-->

<!-- publicaciones/-->
<script src="/js/galeria.js"></script>
<script>

            $(document).ready(function(){
                          
                $('#lightgallery1').lightGallery(); 
                $('#lightgallery2').lightGallery(); 
                $('#lightgallery3').lightGallery(); 
                $('#lightgallery4').lightGallery(); 
                $('#lightgallery5').lightGallery();
               
            });

            
        </script>
@endsection
