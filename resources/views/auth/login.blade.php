@extends('layouts.app')

@section('content')
<section id="login" class="py-5">

    <div class="form-container">
        <span class="form-heading">Login</span>
        <form method="POST" action="{{ route('login') }}">
            @csrf

                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">
                    <span class="bar"></span>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="bar"></span>
                </div>

                <div class="input-group">

                    <button type="submit">
                        <i class="fas fa-sign-in-alt"></i>
                    </button>

                    @if (Route::has('password.request'))
                        <div class="password-recovery">
                            <a href="{{ route('password.request') }}">Esqueceu a Senha? <span> Acesse</span></a>
                        </div>
                    @endif
                </div>

                <div class="input-group-remember-me">
                    <div class="col text-center py-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Lembrar Login') }}
                            </label>
                        </div>
                    </div>
                </div>
        </form>
    </div>

</section>
@endsection
