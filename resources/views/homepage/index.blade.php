@extends('layouts.app')

@section('content')

<!-- Section: intro -->
<section id="intro" class="pb-5">
    <!-- homepagecarrossel  :  parar carrossel  data-interval="false" -->
    <div id="homepagecarrossel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- carousel-indicators  -->
        <ol class="carousel-indicators">
            <li data-target="#homepagecarrossel" data-slide-to="0" class="active"></li>
            <li data-target="#homepagecarrossel" data-slide-to="1"></li>
            <li data-target="#homepagecarrossel" data-slide-to="2"></li>
        </ol>
        <!-- END carousel-indicators  -->

        <!-- carousel-inner  -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/storage/images/introcover.jpg')}}" class="d-block w-100" alt="Today">
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown" style="animation-delay:0.3s;">
                        Tempo <span>Presente</span>  
                    </h2> 
                    <h3 class="animated fadeInUp" style="animation-delay:1s;">
                         Nosso Presente Atual
                    </h3>
                    <p class="animated fadeInUp" style="animation-delay:1.5s;">
                        <a href="{{route('produto.index')}}">Produtos & Serviços</a>
                    </p>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/storage/images/introcover2.png')}}" class="d-block w-100" alt="Future">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="animated fadeInDown" style="animation-delay:0.3s;">
                        Tempo <span>Futuro</span>
                    </h2>
                    <h3 class="animated fadeInUp" style="animation-delay:1s;">
                        Um Futuro CyberPunk
                    </h3>
                    <p class="animated fadeInUp" style="animation-delay:1.5s;">
                        <a href="{{route('produto.index')}}">Produtos & Serviços</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/storage/images/introcover3.jpg')}}" class="d-block w-100" alt="FarawayFuture">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="animated fadeInDown" style="animation-delay:0.3s;">
                        Tempo <span>Futuro Distante ?</span>
                    </h2>
                    <h3 class="animated fadeInUp" style="animation-delay:1s;">011101000110000101101100011101100110010101111010</h3>
                    <p class="animated fadeInUp" style="animation-delay:1.5s;">
                        <a href="{{route('produto.index')}}">Produtos & Serviços</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- END carousel-inner  -->


        <a class="carousel-control-prev" href="#homepagecarrossel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#homepagecarrossel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Proximo</span>
        </a>
        
    </div>
    <!-- ENDhomepagecarrossel -->
</section>
<!-- END Section: intro -->

<!-- Section: body -->
<section id="body">

    <!-- Container-->
    <div class="container py-5">
        <!-- row-->
        <div class="row pb-5 mb-5">

            <div class="col-6">
                <div class="row">
                    <h1 class="time-machine animated" style="animation-delay:1s;">Máquina do Tempo<h1>
                </div>
                <div class="row">
                    <p class="time-machine animated" style="animation-delay:2s;">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam
                        , quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.<p>
                </div>
            </div>


            <div class="col-6 pt-3" style="">
            <a  href="{{asset('/storage/images/bodycover2.jpg')}}" data-lightbox="image-1" 
                data-title="Imagem Time Machine minimalista">
                <img style="animation-delay:2.5s;"  src="{{asset('/storage/images/bodycover2.jpg')}}" 
                     class="img-fluid time-machine-img animated w-100" alt="">
            </a>
            </div>



        </div>
        <!-- End row-->

        <!-- row-->
        <div class="row pb-5">

            <div class="col-6 pt-3" style="">
                <a href="{{asset('/storage/images/bodycover1.jpg')}}" data-lightbox="image-2" data-title="Férias do seu SONHO !">
                    <img style="animation-delay:2.5s;" 
                         src="{{asset('/storage/images/bodycover1.jpg')}}" 
                         class="img-fluid time-trip-img animated" alt="">
                </a>
            </div>
    
            <div class="col-6 pl-4">
                <div class="row">
                    <h1 class="time-trip animated" style="animation-delay:1s;">Agendamento de Viagem<h1>
                </div>
                <div class="row">
                    <p class="time-trip animated" style="animation-delay:2s;">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam
                        , quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.<p>
                </div>
            </div>

        </div>
        <!-- End row-->

    </div>
    <!-- END Container-->

<!-- END Section: body -->
</section>

@endsection

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">


$(document).ready(function() {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
  
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
  // If element is scrolled into view, fade it in
  $(window).scroll(function() {

    $('.time-machine.animated').each(function() 
    {
      if (isScrolledIntoView(this) === true) {        
        $(this).addClass('fadeInLeft');
      }
    });

    $('.time-machine-img.animated').each(function() 
    {
      if (isScrolledIntoView(this) === true) {        
        $(this).addClass('fadeInRight');
      }
    });


    $('.time-trip.animated').each(function() 
    {
        if (isScrolledIntoView(this) === true) {        
            $(this).addClass('fadeInRight');
        }
    });

    $('.time-trip-img.animated').each(function() 
    {
        if (isScrolledIntoView(this) === true) {        
            $(this).addClass('fadeInLeft');
        }
    });

  });
});
</script>