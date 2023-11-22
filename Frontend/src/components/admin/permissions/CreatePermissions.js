import React from 'react'
import { Link } from 'react-router-dom'

function CreatePermissions() {
  return (
    <div className="card card-primary">
        <div className="card-header">
            <h3 className="card-title">Ajoute <small>d'une Permission</small>
            </h3>
            <div className="card-tools">
                <div className="input-group float-end">
                    <Link to="/permissions" className="btn btn-danger"><i className="fa fa-arrow-left mr-2" />Liste de Permissions</Link>
                </div>
            </div>
        </div>
        <form id="quickForm" action method="post">
            <div className="card-body">
            <div className="form-group">
                <label htmlFor="exampleInputPermission">Nom</label>
                <input type="text" name="name" className="form-control" id="exampleInputPermission" placeholder="Saisir le nom de la Permission" />
            </div>
            </div>
            <div className="card-footer">
            <button type="submit" className="btn btn-success"><i className="fa fa-save mr-2" />Ajouter</button>
            </div>
        </form>
    </div>

  )
}

export default CreatePermissions