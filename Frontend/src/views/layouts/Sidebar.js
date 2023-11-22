import React from 'react';
import {Link} from "react-router-dom";

function Sidebar() {
  return (

    <div className="sidebar">
        <div className="user-panel mt-3 pb-3 mb-3 d-flex">
            <div className="image">
                {/* <img src="" alt=""> */}
                {/* <<img src="" alt=""> src="" className="img-circle elevation-2" alt="User Image"> */}
            </div>
            <div className="info">
                <Link to="#" className="d-block">Diagui TOUNKARA</Link>
            </div>
        </div>

        <nav className="mt-2">
            <ul className="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li className="nav-item">
                    <Link to="admin/dashboard" className="nav-link active">
                        <i className="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </Link>
                </li>

                    <li className="nav-item">
                        <Link to="#" className="nav-link mt-2">
                            <i className="nav-icon fas fa-edit"></i>
                            <p>
                                Gestion d'accéssibilité
                                <i className="fas fa-angle-left right"></i>
                            </p>
                        </Link>
                        <ul className="nav nav-treeview">

                            <li className="nav-item">
                                <Link to="admin/users" className="nav-link">
                                    <i className="nav-icon fas fa-user"></i>
                                    <p>
                                        Liste des utilisateurs
                                    </p>
                                </Link>
                            </li>

                            <li className="nav-item">
                                <Link to="" className="nav-link">
                                    <i className="nav-icon fas fa-tasks"></i>
                                    <p>
                                        Roles
                                    </p>
                                </Link>
                            </li>

                            <li className="nav-item">
                                <Link to="" className="nav-link">
                                    <i className="nav-icon fas fa-lock"></i>
                                    <p>
                                        Permissions
                                    </p>
                                </Link>
                            </li>
                        </ul>
                    </li>

                <li className="nav-item">
                    <Link to="" className="nav-link">
                        <i className="nav-icon fas fa-envelope"></i>
                        <p>
                            Messages
                        </p>
                    </Link>
                </li>
                <li className="nav-header">Publications</li>

                <li className="nav-item">
                    <Link to="#" className="nav-link">
                    <i className="nav-icon fas fa-table"></i>
                    <p>
                        Gestion de contenu
                        <i className="fas fa-angle-left right"></i>
                    </p>
                    </Link>
                    <ul className="nav nav-treeview">

                        <li className="nav-item">
                            <Link to="" className="nav-link">
                                <i className="nav-icon fas fa-tags"></i>
                                <p>
                                    Publications
                                </p>
                            </Link>
                        </li>

                        <li className="nav-item">
                            <Link to="" className="nav-link">
                            <i className="fa fa-list nav-icon"></i>
                            <p>Catégories</p>
                            </Link>
                        </li>

                        <li className="nav-item">
                            <Link to="" className="nav-link">
                            <i className="fa fa-tags nav-icon"></i>
                            <p>Tags</p>
                            </Link>
                        </li>
                    </ul>
                </li>

                <li className="nav-item">
                    <Link to="" className="nav-link">
                        <i className="nav-icon fas fa-heart"></i>
                        <p>
                            Likes
                        </p>
                    </Link>
                </li>

                <li className="nav-item">
                    <Link to="" className="nav-link">
                        <i className="nav-icon fas fa-comment"></i>
                        <p>
                            Commentaires
                        </p>
                    </Link>
                </li>

                <li className="nav-item">
                    <Link to="" className="nav-link">
                        <i className="nav-icon fas fa-list"></i>
                        <p>
                            Abonnements
                        </p>
                    </Link>
                </li>

                <li className="nav-item">
                    <Link to="" className="nav-link">
                        <i className="nav-icon fas fa-cog"></i>
                        <p>
                            Paramètre
                        </p>
                    </Link>
                </li>

                <li className="nav-header">Rapports</li>

                <li className="nav-item">
                    <Link to="" className="nav-link">
                        <i className="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Statistique
                        </p>
                    </Link>
                </li>

                <li className="nav-item">
                    <Link to="" className="nav-link">
                        <i className="nav-icon far fa-user"></i>
                        <p>
                            Mon Profil
                        </p>
                    </Link>
                </li>

                <li className="nav-item">
                    <Link to="" className="nav-link"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i className="nav-icon fas fa-sign-out-alt"></i>
                        Déconnexion
                    </Link>
                    
                </li>

            </ul>
        </nav>
    </div>

  )
}

export default Sidebar
