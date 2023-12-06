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

  // const [errors, setErrors] = useState({
  //   username: '',
  //   name: '',
  //   email: '',
  //   password: '',
  //   password_confirmation: '',
  // });
  

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

        axios.post('/api/register', userData)
        .then(res => {
          // Check if there are specific error messages for username and email
          if (res.data.errors) {
            // Afficher les erreurs spécifiques à l'utilisateur
            const usernameError = res.data.errors.username ? res.data.errors.username[0] : null;
            const emailError = res.data.errors.email ? res.data.errors.email[0] : null;
      
            Swal.fire({
              title: "Erreur!",
              text: "Une erreur s'est produite lors de l'inscription. Veuillez vérifier les informations fournies.",
              icon: "error",
              confirmButtonText: "D'accord",
              confirmButtonColor: "red",
              timer: 7500
            });
      
            // Afficher les erreurs spécifiques à l'utilisateur
            if (usernameError) {
              console.log('Username Error:', usernameError);
              // Afficher le message d'erreur d'username à l'utilisateur
      
            } else if (emailError) {
              console.log('Email Error:', emailError);
              // Afficher le message d'erreur d'email à l'utilisateur
            }
          } else {
            // La requête a été traitée avec succès
            navigate('/login');
      
            Swal.fire({
              title: "Félicitations!",
              text: "Votre inscription a été effectuée! Veuillez vous connecter",
              icon: "success",
              confirmButtonText: "D'accord",
              confirmButtonColor: "green",
              timer: 7500
            });
          }

          // Réinitialisez les erreurs après un succès
          // setErrors({
          //   username: '',
          //   name: '',
          //   email: '',
          //   password: '',
          //   password_confirmation: '',
          // });
      
          console.log(res);
        }).catch(error => {
          console.error('API Error:', error);
      
          // Check if there are specific error messages for username and email
          if (error.response && error.response.data && error.response.data.errors) {
            const usernameError = error.response.data.errors.username ? error.response.data.errors.username[0] : null;
            const emailError = error.response.data.errors.email ? error.response.data.errors.email[0] : null;

            // Generate a pop up alert message if there are any error
            Swal.fire({
              title: "Erreur!",
              text: "Une erreur inattendue s'est produite lors de l'inscription. Veuillez réessayer plus tard.",
              icon: "error",
              confirmButtonText: "D'accord",
              confirmButtonColor: "red",
              timer: 7500
            });

            // Log specific error messages
            console.log(usernameError);
            console.log(emailError);
          }
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
            <input
              type="text"
              className="form-control"
              onChange={(e) => setUsername(e.target.value)}
              value={username}
              name="username"
              placeholder="Username"
            />
            <div className="input-group-append">
              <div className="input-group-text">
                <span className="fas fa-user"></span>
              </div>
            </div>
            {/* <div class="error-message"><span>{errors.username}</span></div> */}
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