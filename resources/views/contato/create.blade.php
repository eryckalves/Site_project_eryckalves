@extends('layouts.app')

@section('content')


<div class="container pb-5 pt-4 mb-5">
    <div class="row align-items-center">
        <div class="col-4"><h3>Contato</h3></div>
    </div>

    <hr>   

    <!-- Verifica se a sessao possui a viavel-->
    @if(Session::has('mensagem'))
        @if(Str::contains(Session::get('mensagem'),'Sucesso'))
            <div class="alert alert-success">{{Session::get('mensagem')}}</div>
        @else
            <div class="alert alert-danger">{{Session::get('mensagem')}}</div>
        @endif
    @endif

    <!-- ROW -->
    <div class="row align-items-center align-content-center ">

        <div class="col-4 contato">

             <!-- FORM -->
            <form action="/contato" method="post">

                 <!-- Name -->
                 <div class="form-group">
                    <label for="name">Nome</label>
                    <!-- para buscar o valor antigo se falhar usar old('') -->
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Digite Nome">
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                </div>
                <!-- FIM Name -->

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Digite Email">
                    <small id="emailHelp" 
                           class="form-text text-muted">Não vamos divulgar seu endereço para ninguém.
                    </small>
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                </div>
                <!-- FIM Email -->

                <!-- Message -->
                <div class="form-group">
                    <label for="message">Menssagem</label>
                    <textarea name="message" id="message" value="{{ old('message') }}" 
                              cols="30" rows="10" class="form-control" >
                    </textarea>
                    <div class="text-danger">{{ $errors->first('message') }}</div>
                </div>
                <!-- FIM Message -->

                @csrf

                <div class="pt-4" >
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </div>

            </form>
            <!-- FIM FROM -->

        </div>

        <!-- Goole Maps -->
        <div class="col-5 offset-2" >
            <h6>Rua Nome da rua , 999</h6>
            <div class="map-container pb-5"  > 

                <!-- MAPA VEM DO resources/js/components/ComponentsContato.vue -->
                <contato-component></contato-component>

            </div>

        </div>

    </div>
    <!-- FIM ROW -->
    
</div>



@endsection