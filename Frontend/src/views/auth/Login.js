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
      // If email or password input is empty
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

      console.log('User Data:',userData);
      
      axios.get('/sanctum/csrf-cookie').then(response => {
        axios.post('/api/login', userData).then(res => {
          console.log('API Response:', res);
      
          if (res.status === 200) {
            console.log('ID:', res.data.data.id);
            console.log('Username:', res.data.data.username);
            console.log('Token:', res.data.data.token);
      
            // Mise à jour des données dans localStorage
            localStorage.setItem('ID', res.data.data.id);
            localStorage.setItem('USERNAME', res.data.data.username);
            localStorage.setItem('TOKEN', res.data.data.token);
      
            // Vérification du rôle utilisateur
            const roleId = res.data.data.role_id;
      
            if (roleId === 1) {
              // Si l'utilisateur est un administrateur
              navigate('/admin/dashboard');
              Swal.fire({
                title: "Vous êtes connecté.e !",
                text: "Bienvenue sur votre Tableau de bord",
                icon: "success",
                confirmButtonText: "D'accord",
                confirmButtonColor: "green",
                timer: 7500
              });
            } else {
              // Si l'utilisateur n'est pas un administrateur
              navigate('/');
              Swal.fire({
                title: "Félicitations!",
                text: "Vous êtes connecté.e",
                icon: "success",
                confirmButtonText: "D'accord",
                confirmButtonColor: "green",
                timer: 7500
              });
            }
          } else {
            // Afficher un message d'erreur en cas de statut différent de 200
            Swal.fire({
              title: "Error!",
              text: "Une erreur s'est produite ! Veuillez réessayer",
              icon: "error",
              confirmButtonText: "D'accord",
              confirmButtonColor: "red",
              timer: 7500
            });
          }
        }).catch(error => {
          // Gestion des erreurs lors de la requête
          console.error('API Error:', error);
          // handleApiErrors(error);
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
            {/* <div className="error-message red">{errors.email}</div> */}
            <div className="input-group-append">
              <div className="input-group-text">
                <span className="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div className="input-group mb-3">
            <input type="password" name="password" value={password} onChange={(e) => setPassword(e.target.value)} className="form-control" placeholder="Password" />
            {/* <div className="error-message">{errors.password}</div> */}
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