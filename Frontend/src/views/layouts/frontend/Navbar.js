import React from 'react'
import { Link } from 'react-router-dom'

// CSS and JS Links
import '../../../components/assets/css/theme.css'
import '../../../components/assets/js/theme'

function Navbar() {
  return (
    <div>
        <header className="header-area overlay">
            <nav className="navbar navbar-expand-md navbar-dark fixed-top">
                <div className="container">
                    <Link to="#" className="navbar-brand">WebGenius Solutions</Link>
                    <button type="button" className="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span className="menu-icon-bar" />
                        <span className="menu-icon-bar" />
                        <span className="menu-icon-bar" />
                    </button>
                    <div id="main-nav" className="collapse navbar-collapse">
                        <ul className="navbar-nav ml-auto">
                            <li><Link to="#" className="nav-item nav-link active">Home</Link></li>
                            <li><Link to="#" className="nav-item nav-link">PHP</Link></li>
                            <li><Link to="#" className="nav-item nav-link">Laravel</Link></li>
                            <li><Link to="#" className="nav-item nav-link">React JS</Link></li>
                            <li><Link to="#" className="nav-item nav-link">Vue JS</Link></li>
                            <li className="dropdown">
                                <Link to="#" className="nav-item nav-link" data-toggle="dropdown">Autres</Link>
                                <div className="dropdown-menu">
                                <Link to="#" className="dropdown-item">Rest API</Link>
                                <Link to="#" className="dropdown-item">Laravel Roadmap</Link>
                                <Link to="#" className="dropdown-item">React Native</Link>
                                </div>
                            </li>
                            <li><Link to="#" className="nav-item nav-link">Contact</Link></li>
                            <li><Link to="/login" className="nav-item nav-link">Login</Link></li>
                            <li className="dropdown">
                                <Link to="#" className="nav-item nav-link" data-toggle="dropdown">My Profile</Link>
                                <div className="dropdown-menu">
                                    <Link to="#" className="dropdown-item">View Profile</Link>
                                    <Link to="#" className="dropdown-item">Log out</Link>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div className="banner">
                <div className="container">
                <h1>Welcome To My Blog</h1>
                <p>Lorem ipsm dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie.</p>
                <Link to="#content" className="button button-primary">Learn More</Link>
                </div>
            </div>
        </header>

    </div>
  )
}

export default Navbar