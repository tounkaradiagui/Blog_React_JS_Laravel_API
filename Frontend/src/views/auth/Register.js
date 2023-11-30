import React, {useState} from 'react'
import { Link, useNavigate} from 'react-router-dom'
import axios from '../../components/api/axios'
import Swal from 'sweetalert2'

function Register() {
  const [username, setUsername] = useState("");
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [password_confirmation, setPasswordConfirmation] = useState("");

  const navigate = useNavigate();

  const handleSubmit = (event) => {
    event.preventDefault();
    // Check if all inputs are filled
    if (!username || !name || !email || !password || !password_confirmation){
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Veuillez remplir tous les champs!", //Show an alert error pop up message
        footer: "Message d'erreur"
      });
    } else if(password !== password_confirmation){ //check if the password matched
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Le mot de passe ne correspond pas",
        footer: "Message d'erreur"
      });
    } else {
      const userData = {
        username: username,
        name: name,
        email: email,
        password: password,
        password_confirmation: password_confirmation
      };

      console.log(userData);

      // Laravel sanctum API - csrf-token setting to true in axios files
      axios.get('/sanctum/csrf-cookie').then(response => {

        axios.post('/api/register', userData).then(res => {
          
          // Check the status code from the API
          if (res.status === 200){
            // Show a success message and redirect to login page if it's true
            navigate('/login');

            Swal.fire({
              title: "Félicitaions!",
              text: "Votre inscription a été effectuée! Veuillez vous connecter",
              icon: "success",
              confirmButtonText: "D'accord",
              confirmButtonColor: "green",
              timer: 7500
            });

          } else {
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
        // Setted all input fields to null after registered
        setUsername("");
        setName("");
        setEmail("");
        setPassword("");
        setPasswordConfirmation("");
        
      });
    }
  }
  

  return (
    <div className="d-flex vh-100 bg-primary justify-content-center align-items-center">
      <div className='bg-white w-50 rounded p-3'>
        <p className="login-box-msg">Welcome back !</p>

        <form onSubmit={handleSubmit}>
          <div className="input-group mb-3">
            <input type="text" className="form-control" onChange={(e) => setUsername(e.target.value)} value={username} name="username" placeholder="Username" />
            <div className="input-group-append">
              <div className="input-group-text">
                  <span className="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div className="input-group mb-3">
            <input type="text" className="form-control" onChange={(e) => setName(e.target.value)} value={name} name="name" placeholder="Full Name" />
            <div className="input-group-append">
              <div className="input-group-text">
                  <span className="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div className="input-group mb-3">
            <input type="email" className="form-control" onChange={(e) => setEmail(e.target.value)} value={email} name="email" placeholder="Email" />
            <div className="input-group-append">
              <div className="input-group-text">
                  <span className="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div className="input-group mb-3">
              <input type="password" className="form-control" onChange={(e) => setPassword(e.target.value)} value={password} name="password" placeholder="Password" />
              <div className="input-group-append">
                <div className="input-group-text">
                    <span className="fas fa-lock"></span>
                </div>
              </div>
          </div>

          <div className="input-group mb-3">
            <input type="password" className="form-control" onChange={(e) => setPasswordConfirmation(e.target.value)} value={password_confirmation} name="password_confirmation" placeholder="Confirm Password" />
            <div className="input-group-append">
              <div className="input-group-text">
                  <span className="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div className="row">
            <div className="col-6">
                <button type="submit" className="btn btn-primary btn-block">Poursuivre</button>
            </div>
          </div>

        </form>

        <div className="social-auth-links text-center">
          <Link to="#" className="btn btn-block btn-primary">
              <i className="fab fa-facebook mr-2"></i>
              S'inscrire via Facebook
          </Link>
          <Link to="#" className="btn btn-block btn-danger">
              <i className="fab fa-google-plus mr-2"></i>
              S'inscrire via Google
          </Link>
        </div>

        <p className="mb-0">
          <Link to="/login" className="text-center">J'ai déjà un compte</Link>
        </p>
        
      </div>
    </div>
  )
}

export default Register