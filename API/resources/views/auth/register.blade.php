@extends('layouts.app')

@section('content')
    <div class="register-box">
        <div class="card card-outline card-primary">
        {{-- <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
        </div> --}}
        <div class="card-body">
            <p class="login-box-msg">Créer votre compte</p>
    
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Mot de Passe">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmer le mot de Passe">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-6">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                            J'accepte les termes et <a href="#">conditions d'utilisations </a>
                            </label>
                        </div>
                    </div> --}}
                    <!-- /.col -->
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block">Poursuivre</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
    
            <div class="social-auth-links text-center">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    S'inscrire via Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    S'inscrire via Google
                </a>
            </div>
    
            <a href="{{route('login')}}" class="text-center">J'ai déjà un compte</a>
        </div>
        <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
  <!-- /.register-box -->
@endsection
  
