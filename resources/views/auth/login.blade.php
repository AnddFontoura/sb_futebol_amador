@extends('layouts.auth')

@section('content')
<form class="form-signin col-md-4 offset-md-4 col-sm-12" method="POST" action="{{ route('login') }}">
    @csrf
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">DEFESA</h1>
    <h3>ESPETACULAR</a></p>
  </div>

  <div class="form-label-group">
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Endereço de E-mail</label>
  </div>

  <div class="form-label-group">
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <label for="inputPassword">Senha</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Lembrar
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
  <a href="{{ route('register') }}" class="btn btn-lg btn-success btn-block" >Criar Conta</a>
  <p class="mt-5 mb-3 text-muted text-center">© 2020-2021</p>
</form>


<!--div class="container-auto" >
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
            <div class="card" >
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12" >
            Foto de um society, um futsal, um campo, sobreposta com o logo da defesa espetacular
        </div>
    </div>
</div-->
@endsection
