<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Ticketing Museum | Login Petugas</title>

  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <b>E-Ticketing</b> Museum
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login Petugas Museum</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group mb-3">
          <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

          @error('email')
            <span class="invalid-feedback d-block">
              {{ $message }}
            </span>
          @enderror
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

          @error('password')
            <span class="invalid-feedback d-block">
              {{ $message }}
            </span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block">
          Login
        </button>
      </form>

      <div class="text-center mt-3">
        <a href="{{ route('welcome') }}">Kembali ke Beranda</a>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>

</body>
</html>