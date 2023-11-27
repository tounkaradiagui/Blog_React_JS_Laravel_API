import React from 'react'
import { Link } from 'react-router-dom';

function ListUsers() {
  return (
    <div>
      
      <div className="row">
        <div className="col-12">
          <div className="card">
            <div className="card-header">
              <h3 className="card-title">Liste des utilisateurs</h3>
              <div className="card-tools">
                <ul className="nav nav-pills ml-auto">
                  <li className="nav-item mr-1">
                    <button type="button" href className="btn btn-primary float-end btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal"><i className="fa fa-plus-circle mr-2" />Ajouter</button>
                  </li>
                  <div className="nav-item">
                    <div className="input-group mt-0 input-group-sm" style={{width: 350}}>
                      <input type="text" name="table_search" className="form-control float-right" placeholder="Rechercher par email" />
                      <div className="input-group-append">
                        <button type="submit" className="btn btn-default"> <i className="fas fa-search" /> </button>
                      </div>
                    </div>
                  </div>
                </ul>
              </div>
            </div>
            <div className="card-body table-responsive p-0">
              <table id="example1" className="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Rôle</th>
                    <th>Date de Création</th>
                    <th>Statut</th>
                    <th colSpan={5} className="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td />
                    <td />
                    <td />
                    <td />
                    <td />
                    <td>
                      <span className="badge badge-success">
                      </span>
                    </td>
                    <td />
                    <td>
                    </td>
                    <td>
                      <Link href="{{route('users.edit', $user->id)}}" type="button" className="btn btn-success" title="Modifier"><i className="fa fa-edit" /></Link>
                    </td>
                    <td>
                    </td>
                    <td>
                      <Link href="{{route('users.show', $user->id)}}" className="btn btn-primary" title="Voir"><i className="fa fa-eye" /></Link>
                    </td>
                    <td>
                      <Link href="{{url('users/'. $user->id. '/delete')}}" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')" className="btn btn-danger" title="Supprimer"><i className="fa fa-trash" /></Link>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  
      {/* // Modal Ajout d'un utilisateur */}
      <div className="modal fade" id="addUserModal" tabIndex={-1} aria-labelledby="addUserModalModalLabel" aria-hidden="true">
        <div className="modal-dialog modal-lg">
          <div className="modal-content">
            <div className="modal-header">
              <h4 className="modal-title fs-5" id="addUserModalModalLabel">Ajouter un nouvel utilisateur</h4>
              <button type="button" className="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form action method="post">
              <div className="modal-body">
                <div className="row">
                  <div className="col-md-6">
                    <div className="form-group">
                      <label>Nom</label>
                      <input type="text" name="nom" className="form-control @error('nom') is-invalid @enderror" />
                      <span className="text-danger">{'{'}{'{'}$message{'}'}{'}'}</span>
                    </div>
                  </div>
                  <div className="col-md-6">
                    <div className="form-group">
                      <label>Prénom</label>
                      <input type="text" name="prenom" className="form-control @error('prenom') is-invalid @enderror" />
                      <span className="text-danger">{'{'}{'{'}$message{'}'}{'}'}</span>
                    </div>
                  </div>
                </div>
                <div className="row">
                  <div className="col-md-6">
                    <div className="form-group">
                      <label>Email</label>
                      <input type="text" name="email" className="form-control @error('email') is-invalid @enderror" />
                      <span className="text-danger">{'{'}{'{'}$message{'}'}{'}'}</span>
                    </div>
                  </div>
                  <div className="col-md-6">
                    <div className="form-group">
                      <label>Téléphone</label>
                      <input type="text" name="phone" className="form-control @error('phone') is-invalid @enderror" />
                      <span className="text-danger">{'{'}{'{'}$message{'}'}{'}'}</span>
                    </div>
                  </div>
                </div>
                <div className="row">
                  <div className="col-md-9">
                    <div className="form-group">
                      <label>Adresse</label>
                      <input type="text" name="adresse" className="form-control @error('adresse') is-invalid @enderror" />
                      <span className="text-danger">{'{'}{'{'}$message{'}'}{'}'}</span>
                    </div>
                  </div>
                </div>
                <div className="row">
                  <div className="col-md-6">
                    <div className="form-group">
                      <label>Mot de Passe</label>
                      <input type="text" name="password" className="form-control @error('password') is-invalid @enderror" />
                      <span className="text-danger">{'{'}{'{'}$message{'}'}{'}'}</span>
                    </div>
                  </div>
                  <div className="col-md-6">
                    <div className="form-group">
                      <label>Confirmer le Mot de Passe</label>
                      <input type="text" name="password_confirmation" className="form-control @error('password_confirmation') is-invalid @enderror" />
                      <span className="text-danger">{'{'}{'{'}$message{'}'}{'}'}</span>
                    </div>
                  </div>
                </div>
                <div className="row">
                  <div className="col-md-12 mt-3">
                    <div className="form-group">
                      <select className="form-control form-control-user @error('role_id') is-invalid @enderror" name="role">
                        <option selected disabled>Choisir un Rôle</option>
                        <option value>Name</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div className="row">
                  <div className="col-md-9 mt-3">
                    <div className="form-group">
                      <label htmlFor>Assigner une Permission</label>
                    </div>
                  </div>
                </div>
                <div className="row">
                  <div className="form-group">
                    <div className="row">
                      <div className="col-md-12 mt-3">
                        <div className="form-check form-check">
                          <label className="form-check-label mr-4 mb-2" htmlFor="inlineCheckbox2">
                            <span className="p-1 lg"> <strong>Name</strong> </span>
                          </label>
                          <input className="form-check-input" name="permissions" type="checkbox" id="inlineCheckbox2" defaultValue />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div className="modal-footer">
                <button type="button" className="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" className="btn btn-primary">Enregistrer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  
      {/* Fin du Modal d'ajout d'un utilisateur  */}
    </div>
  )
}

export default ListUsers