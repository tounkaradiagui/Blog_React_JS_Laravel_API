import React from 'react'
import {Link} from 'react-router-dom';

function Navbar() {
  return (
    <div>
        <ul className="navbar-nav">
            <li className="nav-item">
                <Link className="nav-link" data-widget="pushmenu" to="#" role="button"><i className="fas fa-bars"></i></Link>
            </li>
            <li className="nav-item d-none d-sm-inline-block">
                <Link to="#" className="nav-link">Accueil</Link>
            </li>
        </ul>        
    </div>
  )
}

export default Navbar
