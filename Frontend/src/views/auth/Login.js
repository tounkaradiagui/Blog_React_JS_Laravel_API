import React from 'react'
import { Link } from 'react-router-dom'

function Login() {
  return (
    <div class="d-flex vh-100 bg-primary justify-content-center align-items-center">
      <div className='bg-white w-50 rounded p-3'>
        <p class="login-box-msg">Welcome back !</p>

        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email"/>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-6">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember" />
                </div>
                <label for="remember">
                    Se rappeler de moi
                </label>
              </div>
              <div class="col-6">
                  <button type="submit" class="btn btn-primary btn-block">Connexion</button>
              </div>
          </div>
        </form>

        <div class="social-auth-links text-center mb-3">
          <p>- OR -</p>
          <Link to="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Connexion via Facebook
          </Link>
          <Link to="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Connexion via Google
          </Link>
        </div>

        <p class="mb-1">
          <Link to="">Mot de passe oublié ?</Link>
        </p>
        <p class="mb-0">
          <Link to="/register" class="text-center">Je n'ai pas de compte</Link>
        </p>
      </div>
    </div>
  )
}

export default Login