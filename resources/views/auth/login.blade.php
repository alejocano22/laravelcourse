<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<style>
html, body {
  background-image: url('https://www.elsetge.cat/myimg/f/121-1212743_4k-hd-wallpaper-smoke-black-background-high-resolution.jpg');
  background-size: cover;
  color: #636b6f;
  font-family: 'Nunito', sans-serif;
  font-weight: 200;
  height: 100vh;
  margin: 0;
}

</style>

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">{{ __('Login') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group" align="center">
              <label for="email" > E-MAIL </label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="e-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group" align="center">
              <label for="password">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-check" align="center">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
            <br />
            <div align="center">
              <button type="submit" class="btn btn-dark">
                {{ __('Login') }}
              </button>
              @if (Route::has('password.request'))
              <a class="btn btn-dark" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
              @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
