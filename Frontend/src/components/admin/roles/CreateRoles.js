import React from 'react'
import { Link } from 'react-router-dom'

function CreateRoles() {
  return (
    <div className="card card-primary">
      <div className="card-header">
        <h3 className="card-title">Ajoute <small>d'un Rôle</small>
        </h3>
        <div className="card-tools">
          <div className="input-group float-end">
            <Link to="/roles" className="btn btn-danger"><i className="fa fa-arrow-left mr-2" />Liste de roles</Link>
          </div>
        </div>
      </div>
      <form id="quickForm" action method="post">
        <div className="card-body">
          <div className="form-group">
            <label htmlFor="exampleInputPermission">Nom</label>
            <input type="text" name="name" className="form-control" id="exampleInputPermission" placeholder="Saisir le nom du rôle" />
          </div>
          <div className="form-group">
            <div className="form-group mt-4">
              <label htmlFor="exampleInputRole">Assigner une Permission</label>
            </div>
            <div className="form-check form-check-inline">
              <input className="form-check-input ml-2" name="permissions" type="checkbox" id="inlineCheckbox2" defaultValue="{{$permission->id}}" />
              <label className="form-check-label" htmlFor="inlineCheckbox2">
                <span className="p-1 lg"> <strong>name</strong> </span>
              </label>
            </div>                      
          </div>
        </div>
        <div className="card-footer">
          <button type="submit" className="btn btn-success"><i className="fa fa-save mr-2" />Ajouter</button>
        </div>
      </form>
    </div>

  )
}

export default CreateRoles