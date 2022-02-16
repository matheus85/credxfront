<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{env('APP_NAME')}}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('vendor/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{url('/')}}" class="h1">Credx</a>
    </div>
    <div class="card-body">
      <form action="{{route('signup')}}" method="post">
          @csrf
          <div class="input-group mt-3">
          <input type="text" name="name" class="form-control" placeholder="Nome" value="" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('name')<small class="text-danger">{{ $message }}</small>@enderror
        <div class="input-group mt-3">
          <input type="email" name="email" class="form-control" placeholder="Email" value="" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')<small class="text-danger">{{ $message }}</small>@enderror
        <div class="input-group mt-3">
          <input type="password" name="password" class="form-control" placeholder="Senha" value="" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')<small class="text-danger">{{ $message }}</small>@enderror
        <div class="input-group mt-3">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar senha" value="" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')<small class="text-danger">{{ $message }}</small>@enderror
        <div class="row mt-3">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>

        @if (session()->has('error'))
        <div class="row">
          <div class="col-12">
          <small class="text-danger">{{session('error')}}</small>
          </div>
        </div>
        @endif

      <p class="mb-0 mt-3">
        <a href="{{url('/')}}" class="text-center">Voltar</a>
      </p>
    </div>
  </div>
</div>
<script src="{{asset('vendor/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
