@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Welcome back !</p>

      <form action="{{route('login')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Se rappeler de moi
                </label>
                </div>
            </div>
          <!-- /.col -->
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Connexion via Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Connexion via Google
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Mot de passe oublié ?</a>
      </p>
      <p class="mb-0">
        <a href="{{route('register')}}" class="text-center">Je n'ai pas de compte</a>
      </p>
    </div>
    <!-- /.login-card-body -->
</div>
@endsection
