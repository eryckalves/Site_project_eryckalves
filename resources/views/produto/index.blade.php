@extends('layouts.app')

@section('content')
<section id="service" class="bg-light">


        <!-- container -->
        <div class="container text-center">
            <!-- row -->
            <div class="row pt-5" >
                <!-- col -->
                <div class="col">
                    <h2 class="h1 font-weight-bold text-center mb-5">Serviços</h2>
                    <p class="lead text-center">Nós Fazemos seu sonho acontecer. </P>
                </div>
                <!-- END col -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->


    <!-- Container -->
    <div class="container py-5">

            <!-- row -->
            <div class="row" >
    
            <div class="col-3 col-md-3">
                    <img src="storage/images/past.jpg" class="service-img img-fluid rounded-circle" 
                         style="width:100px; height:100px;" alt="">
                    <h4 class="pt-2">Passado ?</h4>
                    <p>Não permitido motivo : Paradoxo do avô</p>
            </div>
    
            <div class="col-3 col-md-3">
                    <img src="storage/images/wormhole.jpg" class="service-img img-fluid rounded-circle" 
                    style="width:100px; height:100px;" alt="">
                    <h4 class="pt-2">Dimenções</h4>
                    <p>Viage para outros dimenções e descubra oque você perdeu e ganhou.</p>
                </div>

                <div class="col-3 col-md-3">
                    <img src="storage/images/future.jpg" class="service-img img-fluid rounded-circle" 
                         style="width:100px; height:100px;" alt="">
                    <h4 class="pt-2">Futuro</h4>
                    <p>Conheça tudo sobre seu futuro</p>
                </div>

                <div class="col-3 col-md-3">
                    <img src="storage/images/ownfuture.jpg" class="service-img img-fluid rounded-circle" 
                         style="width:100px; height:100px;" alt="">
                    <h4 class="pt-2">Futuro Personalisado</h4>
                    <p>Personalize seu futuro com nossas produtos e serviços</p>
                </div>

            </div>
            <!-- END row -->
    </div>
    <!-- Container -->

</section>

<section id="product">
        <!-- container -->
        <div class="container text-center">
            <!-- row -->
            <div class="row pt-5" >
                <!-- col -->
                <div class="col">
                    <h2 class="h1 font-weight-bold text-center mb-5">Produtos</h2>
                    <p class="lead text-center">Seguros e <strong>Fácies</strong> de usar. </P>
                </div>
                <!-- END col -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->

        <!--container -->
        <div class="container py-5">
            <!-- row -->
            <div class="row text-center" >
                <div class="col">
                        <img src="storage/images/rocktraveltime.png" class="service-img img-fluid rounded-circle" 
                            style="width:150px; height:150px;" alt="">
                        <h4 class="pt-2">Rock Time Travel .v1</h4>
                        <p>Modo de uso : Basta arremessar em sua cabeça</p>
                </div>
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->
</section>

@endsection