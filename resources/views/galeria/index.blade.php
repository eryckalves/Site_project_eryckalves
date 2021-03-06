
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
                    <p class="lead text-center">Galeria usando AWS S3 Bucket para as imagens que são adicionadas pela função de create(laravel) </P>
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
                            <a href="{{ route('posts.create') }}">Adicionar Fotos</a>
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

            <!--row -->
            <div class="row">

            @foreach($posts as $post)

                <div class="col-md-6 col-lg-4 mostrar_excluir">
                    <div class="card border-0 transform-on-hover">
                        <!-- Configuracao do data-lightbox esta no layouts/app.blade.php -->
                        <a href="{{Storage::cloud()->url('/') . $post->image }}" data-lightbox="roadtrip" data-title="{{$post->caption}}">
                            <img src="{{ Storage::cloud()->url('/') . $post->image }}" class="w-100">
                        </a>      
                    </div>

                    @auth
                    <form action="/galeria/{{$post->id}}" method="POST">  
                            <!-- para form precisa do token -->  
                            @csrf
                            @method('DELETE')  
                            <div class="thumbnail">
                                <a href="/galeria/{{$post->id}}" >
                                    <span>
                                            <button style=" background-color: Transparent;
                                                            background-repeat:no-repeat;
                                                            border: none;
                                                            cursor:pointer;
                                                            overflow: hidden;
                                                            outline:none; " 
                                                    type="submit"><img style="height:25px;" src="{{asset('storage/images/delete.png')}}">
                                            </button>
                                            
                                    </span>

                                </a>                         
                            </div>
                        </form>
                    @endauth
                </div>  
            @endforeach   

            <div>
            <!-- FIM row -->

        </div>
        <!-- FIM CONTAINER -->

</div>
<!-- FIM gallery-block cards-gallery -->

</section>
<!-- END Section : galeria -->
@endsection