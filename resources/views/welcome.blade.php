@extends('layouts.appfront')

@section('content')
<style>
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
    #wrapper>div {
        width:320px;
        height:220px;
    }
}
@media screen and (max-width:400px){
    #wrapper>div {
        width:220px;
        height:220px;
    }
}

    </style>

<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/lib/w3.css">
        <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
<!-- <iframe width="100%" height="480" src="https://scontent.fmex32-1.fna.fbcdn.net/v/t66.36240-6/51263870_2723297377931142_7120756407225279401_n.mp4?_nc_cat=109&ccb=1-3&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_ohc=zhf2jjdyYjQAX9bf7i0&_nc_ht=scontent.fmex32-1.fna&oh=25cc4b2f98aa51f27293d56558664fd2&oe=60881B3C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe> -->
<iframe id="muteYouTubeVideoPlayer" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="1024" height="480" src="https://www.youtube.com/embed/{{$config->seo_urlvideo}}?autoplay=1&amp;controls=1&amp;showinfo=0&amp;modestbranding=1&amp;fs=0&amp;cc_load_policy=0&amp;iv_load_policy=3&amp;autohide=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Flocalhost%3A8000&amp;widgetid=1&amp;rel=0&amp;loop=1" style="width: 100%;"></iframe>



<!-- <center><iframe width="100%" height="480" src="https://www.youtube.com/embed/6hPD62oh0Ag?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center> -->
</div>
<div class="container" style="margin-top:5%">
    
        <div class="row mb-4 mx-4" >
          <div class="col-sm-6  rounded-right bg-white row align-items-center">
                <div class="col-sm-12 card bg-light">
                    <h3 class="text-black">Belé</h3>
                    <p>{{$config->frase_1}}</p>
                </div>
           </div>
          
           <div class="col-sm-6  rounded-right bg-white row align-items-center">
                <div class="col-sm-12 card  bg-light" style="text-align: right;">
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
            <div class="col-sm-12">
                <h2 class=" linea text-dark text-center"><span>Cofres</span></h2>
            </div>
            @forelse ($producto as $item)
                <div class="col-sm-3">
                    <div class="card" style="background-color:#d8d3d3";>                
                    <div class="container">
                    <a href="/artesanias/{{$item->categoria->slug}}/{{$item->slug}}">
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
  <div class="col-sm-12">
  <h2 class=" linea text-dark text-center"><span>Lo más reciente de nuestro blog</span></h2>

  </div>
  <div class="row mt-5 mb-5 justify-content-center text-center align-items-center bg-white">
    <div class="col-sm-4 " >
     <p class="text-black display-4" ><strong>{{$r->nombre}}</strong><br></p>
      <a href="/blog/{{$r->slug}}" class="btn btn-outline-dark">Leer más</a>
    </div>
    <div id="wrapper" class="col-sm-8 pt-5 pb-5">
     <div id="div2"  class="col-sm-12" style="background-color:revert";> 
     <img src="/img/post/por-que-lo-usamos.jpeg" alt="{{$r->nombre}}" class="img-fluid rounded-left">       
     </div>
    <div id="div1" class="col-sm-12" style="background-color:revert;" >
     <div class="col-sm-12">
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
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pulceras</a>
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
        <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->title}}</h4><p>{{$item->nombre}}</p>">
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
        <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
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
        <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
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
        <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
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
        <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
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

    <div class=" row col-sm-12 mt-5 mb-5 justify-content-center text-center align-items-center bg-white" style="border: ridge;">
    @forelse ($testimonios as $r)  
        <div id="wrapper" class="col-sm-8 pt-5 pb-5">
            <div id="div2"  class="col-sm-12" style="background-color:revert";>
            <img src= "/img/post/por-que-lo-usamos.jpeg" alt="{{$r->nombre}}" class="img-fluid rounded-left">
            </div>
            <div id="div1" class="col-sm-12" style="background-color:revert;" >
                        <a href="/artesanias/{{$item->categoria->slug}}/{{$item->slug}}">
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
    <div class="col-lg-3 col-md-12 mb-3 mb-lg-0">
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
            <iframe
              src="https://www.youtube.com/embed/A3PDXmYoF5U"
              title="YouTube video"
              allowfullscreen
            ></iframe>
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
            <iframe
              src="https://www.youtube.com/embed/wTcNtgA6gHs"
              title="YouTube video"
              allowfullscreen
            ></iframe>
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
            <iframe
              src="https://www.youtube.com/embed/vlDzYIIOYmM"
              title="YouTube video"
              allowfullscreen
            ></iframe>
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
