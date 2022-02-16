@include('layout.head')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{url('/')}}" class="h1">Credx</a>
    </div>
    <div class="card-body">
      <form action="{{route('login')}}" method="post">
          @csrf
        <div class="input-group mt-3">
          <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off" value="" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')<small class="text-danger">{{ $message }}</small>@enderror
        <div class="input-group mt-3">
          <input type="password" name="password" class="form-control" placeholder="Senha" autocomplete="off" value="" required>
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
        <a href="{{route('signupPage')}}" class="text-center">Registrar-se</a>
      </p>
    </div>
  </div>
</div>
@include('layout.imports')
</body>
</html>
