@extends('layouts.app')

@section('content')


        <!--Section: about-->
        <section id="about" class="py-5 bg-light">

            <!-- Container -->
            <div class="container">
                <!-- Section heading -->
                <h2 class="h1 font-weight-bold text-center mb-5">Tecnologias Utilizadas</h2>
                <!-- Section desc -->
                <p class="lead text-center">A imaginação é mais importante 
                    que a ciência, porque a ciência é limitada, ao passo que a imaginação 
                    abrange o mundo inteiro. </P>
                <p class="lead text-center mx-auto mb-5"> "Albert Einstein"</p>

                
                <!-- row -->
                <div class="row mb-4 pb-1">

                    <!-- column -->
                    <div class="col-sm-7 ">

                        <!-- row -->
                        <div class="row mb-3">

                            <!--column -->
                            <div class="col-1 text-right">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <!-- END column -->

                            <!-- column -->
                            <div class="col-xl-10 col-md-11 col-10" style="min-height:100px;">
                                <h5 class="font-weight-bold mb-3">Laravel</h5>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad
                                    minima veniam, quis nostrum exercitationem ullam.</p>
                            </div>
                            <!-- END column -->

                        </div>
                        <!-- END row -->

                        <!--row-->
                        <div class="row">

                            <!-- column -->
                            <div class="col-1 text-right">
                                <i class="fab fa-bootstrap"></i>
                            </div>
                            <!-- END column -->

                            <!-- column -->
                            <div class="col-xl-10 col-md-11 col-10" style="min-height:100px;">
                                <h5 class="font-weight-bold mb-3">Bootstrap / CSS</h5>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim
                                    ad minima veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam
                                    assumenda deleniti hic.</p>
                            </div>
                            <!-- END column -->

                        </div>
                        <!--END row-->

                        <!--row-->
                        <div class="row">

                            <!-- column -->
                            <div class="col-1 text-right">
                                <i class="fab fa-js"></i>
                            </div>
                            <!-- END column -->

                            <!-- column -->
                            <div class="col-xl-10 col-md-11 col-10" style="min-height:100px;">
                                <h5 class="font-weight-bold mb-3">JavaScript</h5>
                                <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <!-- END column -->

                        </div>
                        <!--END row-->

                    </div>
                    <!--END column-->

                    <!-- column -->
                    <div class="col-5 col-md-5 text-lg-right pr-4">
                        <img class="img-fluid" src="{{ asset('storage/images/codes.jpg')}}" alt="Sample image">
                    </div>
                    <!-- END column -->

            
                </div>
                <!-- END row -->


                <!-- row -->
                <div class="row">

                    <!-- column -->
                    <div class="col-7 col-md-7 text-center text-lg-left">
                        <img class="img-fluid" src="{{ asset('storage/images/imagetest.jpg')}}" alt="Sample image">
                    </div>
                    <!-- END column -->

                    <!-- column -->
                    <div class="col-5 pl-4" style="padding-right:0;">

                        <!-- row -->
                        <div class="row mb-3">

                            <!--column -->
                            <div class="col-1 text-right">
                                <i class="fas fa-code"></i>
                            </div>
                            <!-- end column -->

                            <!-- column -->
                            <div class="col-xl-10 col-md-11 col-10" style="min-height:100px;">
                                <h5 class="font-weight-bold mb-3">Code</h5>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad
                                    minima veniam, quis nostrum exercitationem ullam.</p>
                            </div>
                            <!-- END column -->

                        </div>
                        <!-- END row -->

                        <!-- row -->
                        <div class="row mb-3">

                            <!-- column -->
                            <div class="col-1 text-right">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <!-- END column -->

                            <!-- column -->
                            <div class="col-xl-10 col-md-11 col-10" style="min-height:100px;">
                                <h5 class="font-weight-bold mb-3">Technology</h5>
                                <p class="text-secondary">Lorem ipsum dolor sit amet

                                </p>
                            </div>
                            <!-- END column -->

                        </div>
                        <!-- END row -->

                        <!--row-->
                        <div class="row">

                            <!-- column -->
                            <div class="col-1 text-right">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <!-- END column -->

                            <!-- column -->
                            <div class="col-xl-10 col-md-11 col-10" style="min-height:100px;">
                                <h5 class="font-weight-bold mb-3">Design</h5>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim
                                    ad minima veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam
                                    assumenda deleniti hic.</p>
                            </div>
                            <!-- END column -->

                        </div>
                        <!--END row-->

                    </div>
                    <!--END column-->

                </div>
                <!-- END row -->

            </div>
            <!-- END Container -->

        </section>
        <!-- END Section: about-->

        <!-- Section: team -->
        <section id="team" class="py-5">


        <!-- Container -->
        <div class="container pt-4">
                <h2 class="h1 font-weight-bold text-center mb-5">Nosso Time</h2>
                <hr>
        <!-- END Container -->
        </div>


            <!--Container -->
            <div class="container text-center py-5" >
            <div class="pt-5 row">
                <!--card-deck -->
                <div class="card-deck">

                    <div class="col-4 col-md-4">
                        <div class="card">
                             <div class="align-items-center">
                                <img src="{{asset('/storage/images/coffee-machine.png')}}" class="card-img-top rounded-circle" style="max-height:150px; max-width:150px" alt="...">
                            </div>
                            <div class="card-body">
                            <h4 class="card-title">Coffee Machine</h4>
                            <h5 class="card-title">Coffee Leader</h5>
                            
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            
                            </div>
                            <div class="card-footer">
                                <a href="#"><small class="footer-text pl-sm-3"><i class="fab fa-facebook"></i></small></a>
                                <a href="#"><small class="footer-text pl-sm-3"><i class="fab fa-instagram"></i></small></a>
                                <a href="#"><small class="footer-text pl-sm-3"><i class="fab fa-twitter"></i></small></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-4 col-md-4">
                        <div class="card">
                             <div class="align-items-center">
                                <img src="{{asset('/storage/images/eryckalves.jpg')}}" class="card-img-top rounded-circle" style="max-height:150px; max-width:150px" alt="...">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Eryck Vaz Alves</h4>
                                <h5 class="card-title">FullStack</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vestibulum egestas nisl, et tempus nibh luctus ut.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#"><small class="footer-text pl-sm-3"><i class="fab fa-facebook"></i></small></a>
                                <a href="#"><small class="footer-text pl-sm-3"><i class="fab fa-instagram"></i></small></a>
                                <a href="#"><small class="footer-text pl-sm-3"><i class="fab fa-twitter"></i></small></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-md-4">
                        <div class="card">
                            <div class="align-items-center">
                                <img src="{{asset('/storage/images/computer.png')}}" class="card-img-top rounded-circle" style="max-height:150px; max-width:150px" alt="...">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Computer</h4>
                                <h5 class="card-title">Procrastinator</h5>
                                <p class="card-text">01101000 01100101 01101100 01101100 01101111</p>
                            </div>
                            <div class="card-footer">
                                 <a href="#"><small class="footer-text pl-sm-3"><i class="fab fa-facebook"></i></small></a>
                                <a href="#"><small class="footer-text pl-sm-3"><i class="fab fa-instagram"></i></small></a>
                                <a href="#"><small class="footer-text pl-sm-3"><i class="fab fa-twitter"></i></small></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--END card-deck -->
                </div>
            </div>
            <!-- END Container -->

        </section>
        <!-- END Section: team -->

@endsection