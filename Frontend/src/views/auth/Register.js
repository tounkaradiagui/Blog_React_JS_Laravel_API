import React from 'react'
import { Link } from 'react-router-dom'

function Register() {
  return (
    <div class="d-flex vh-100 bg-primary justify-content-center align-items-center">
      <div className='bg-white w-50 rounded p-3'>
        <p class="login-box-msg">Welcome back !</p>

        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="nom" placeholder="Nom" />
            <div class="input-group-append">
              <div class="input-group-text">
                  <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" name="prenom" placeholder="Prénom" />
            <div class="input-group-append">
              <div class="input-group-text">
                  <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" />
            <div class="input-group-append">
              <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Mot de Passe" />
              <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
              </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmer le mot de Passe" />
            <div class="input-group-append">
              <div class="input-group-text">
                  <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block">Poursuivre</button>
            </div>
          </div>

        </form>

        <div class="social-auth-links text-center">
          <Link to="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i>
              S'inscrire via Facebook
          </Link>
          <Link to="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i>
              S'inscrire via Google
          </Link>
        </div>

        <p class="mb-0">
          <Link to="/login" class="text-center">J'ai déjà un compte</Link>
        </p>
        
      </div>
    </div>
  )
}

export default Register