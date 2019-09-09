
<!-- style .thumbnail a para esconder o botao de excluir que fica encima de cada imagem 
style .mostrar_excluir:hover .thumbnail a para mostrar o botao de excluir quando mouse esta encima da imagem se tiver permissao do laravel usando @ auth no div -->

@extends('layouts.app')

<style>
    
    .thumbnail a 
    {
        display: none;
    }

   
    .mostrar_excluir:hover .thumbnail a
    {
        display:block;
        width:10px;
        height:10px;
        position:absolute;
        top:0px;
        right:30px;
    }

</style>
     
@section('content')
<!-- Section : galeria -->
<section id="galeria" class="bg-light pb-5" >


        <!-- container -->
        <div class="container text-center">
            <!-- row -->
            <div class="row pt-5" >
                <!-- col -->
                <div class="col">
                    <h2 class="h1 font-weight-bold text-center mb-5">Galeria de Imagens</h2>
                    <p class="lead text-center">O espelho e os sonhos são coisas semelhantes, é como a imagem do homem diante de si próprio. </P>
                    <p>José Saramago</P>
                </div>
                <!-- END col -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->


    @auth
    <!-- container -->
    <div class="container ">
        <!-- row -->
        
        <div class="row py-5" >

                <div class="col">
                    <div class="container_botao">
                        <div class="text-center">
                            <a href="#">Adicionar Fotos</a>
                        </div>
                    </div>
                </div>
        </div>
        <!-- END row -->
    </div>
    <!-- END container -->
    @endauth

     <!-- gallery-block cards-gallery -->
     <div id="galeria_card" class="gallery-block cards-gallery pt-5">

        <!-- container -->
        <div class="container">


            <div class="row">
                
                <div class="col-md-4 col-lg-4 mostrar_excluir">
                    <div class="card border-0 transform-on-hover">
                        <!-- Configuracao do data-lightbox esta no layouts/app.blade.php -->
                        <a href="{{ asset('storage/images/galaria1.jpg')}}" data-lightbox="roadtrip" data-title="beautiful Cities">
                            <img src="{{ asset('storage/images/galaria1.jpg')}}" class="w-100">
                        </a>      
                    </div>
                </div>  

                <div class="col-md-4 col-lg-4 mostrar_excluir">
                    <div class="card border-0 transform-on-hover">
                        <!-- Configuracao do data-lightbox esta no layouts/app.blade.php -->
                        <a href="{{ asset('storage/images/galeria2.jpg')}}" data-lightbox="roadtrip" data-title="beautiful Cyber Punk">
                            <img src="{{ asset('storage/images/galeria2.jpg')}}" class="w-100">
                        </a>      
                    </div>
                </div>  

                <div class="col-md-4 col-lg-4 mostrar_excluir">
                    <div class="card border-0 transform-on-hover">
                        <!-- Configuracao do data-lightbox esta no layouts/app.blade.php -->
                        <a href="{{ asset('storage/images/galeria3.jpg')}}" data-lightbox="roadtrip" data-title="beautiful Skys">
                            <img src="{{ asset('storage/images/galeria3.jpg')}}" class="w-100">
                        </a>      
                    </div>
                </div>  

                <div class="col-md-4 col-lg-4 mostrar_excluir">
                    <div class="card border-0 transform-on-hover">
                        <!-- Configuracao do data-lightbox esta no layouts/app.blade.php -->
                        <a href="{{ asset('storage/images/galeria4.jpg')}}" data-lightbox="roadtrip" data-title="beautiful oceans">
                            <img src="{{ asset('storage/images/galeria4.jpg')}}" class="w-100">
                        </a>      
                    </div>
                </div> 

                <div class="col-md-4 col-lg-4 mostrar_excluir">
                    <div class="card border-0 transform-on-hover">
                        <!-- Configuracao do data-lightbox esta no layouts/app.blade.php -->
                        <a href="{{ asset('storage/images/galaria5.jpg')}}" data-lightbox="roadtrip" data-title="beautiful oceans">
                            <img src="{{ asset('storage/images/galaria5.jpg')}}" class="w-100">
                        </a>      
                    </div>
                </div> 


            <div>
            <!-- FIM row -->

        </div>
        <!-- FIM CONTAINER -->

</div>
<!-- FIM gallery-block cards-gallery -->

</section>
<!-- END Section : galeria -->
@endsection
