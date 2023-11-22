import React from 'react'
import { Link } from 'react-router-dom'

function ListRoles() {
  return (
    <div className="row">
      <div className="col-12">
        <div className="card">
          <div className="card-header">
            <h3 className="card-title">Liste de Rôles</h3>
            <div className="card-tools">
              <div className="input-group float-end">
                <Link to="/roles/create" className="btn btn-primary float-end"><i className="fa fa-plus-circle mr-2" />Ajouter</Link>
              </div>
            </div>
          </div>
          <div className="card-body table-responsive p-0">
            <table className="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Nom du rôle</th>
                  <th>Date de Création</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td />
                  <td />
                  <td>
                    <Link to="" className="btn btn-success" title="Modifier"><i className="fa fa-edit" /></Link>
                  </td>
                  <td>
                    <Link to="" onclick="return confirm('Voule-vous vraiment supprimé ce rôle ?')" className="btn btn-danger" title="Supprimer"><i className="fa fa-trash" /></Link>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  )
}

export default ListRoles