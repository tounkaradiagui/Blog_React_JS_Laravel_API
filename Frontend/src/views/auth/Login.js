import React, { useState } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import axios from '../../components/api/axios'
import Swal from 'sweetalert2'

function Login() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const navigate = useNavigate();

  const handleLogin = (event) => {
    event.preventDefault();
    if(!email || !password ){
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Veuillez remplir tous les champs!", //Show an alert error pop up message
        footer: "Message d'erreur"
      });
    }else{

      const userData = {
        email : email,
        password : password
      };

      console.log(userData);
      
      axios.get('/sanctum/csrf-cookie').then(response => {
        axios.post('/api/login', userData).then(res => {
          if(res.status === 200){
            navigate('/admin/dashboard');
            
          }else{
            // Show an alert error pop up message
            Swal.fire({
              title: "Error!",
              text: "Une erreur s'est produite ! Veuillez réessayer",
              icon: "error",
              confirmButtonText: "D'accord",
              confirmButtonColor: "red",
              timer: 7500
            });
          }
          console.log(res);
        });

        setEmail("");
        setPassword("");

      });     
    }
  }

  return (
    <div className="d-flex vh-100 bg-primary justify-content-center align-items-center">
      <div className='bg-white w-50 rounded p-3'>
        <p className="login-box-msg">Welcome back !</p>

        <form onSubmit={handleLogin}>
          <div className="input-group mb-3">
            <input type="email" name="email" value={email} onChange={(e) => setEmail(e.target.value)} className="form-control" placeholder="Email"/>
            <div className="input-group-append">
              <div className="input-group-text">
                <span className="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div className="input-group mb-3">
            <input type="password" name="password" value={password} onChange={(e) => setPassword(e.target.value)} className="form-control" placeholder="Password" />
            <div className="input-group-append">
              <div className="input-group-text">
                <span className="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div className="row">
              <div className="col-6">
                <div className="icheck-primary">
                  <input type="checkbox" id="remember" />
                </div>
                <label htmlFor="remember">
                    Se rappeler de moi
                </label>
              </div>
              <div className="col-6">
                  <button type="submit" className="btn btn-primary btn-block">Connexion</button>
              </div>
          </div>
        </form>

        <div className="social-auth-links text-center mb-3">
          <p>- OR -</p>
          <Link to="#" className="btn btn-block btn-primary">
            <i className="fab fa-facebook mr-2"></i> Connexion via Facebook
          </Link>
          <Link to="#" className="btn btn-block btn-danger">
            <i className="fab fa-google-plus mr-2"></i> Connexion via Google
          </Link>
        </div>

        <p className="mb-1">
          <Link to="">Mot de passe oublié ?</Link>
        </p>
        <p className="mb-0">
          <Link to="/register" className="text-center">Je n'ai pas de compte</Link>
        </p>
      </div>
    </div>
  )
}

export default Login