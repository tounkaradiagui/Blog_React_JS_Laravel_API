import React from 'react'
import { Link } from 'react-router-dom'

function ListPermissions() {
  return (
  <div className="row">
    <div className="col-12">
      <div className="card">
        <div className="card-header">
          <h3 className="card-title">Liste de Permissions</h3>
          <div className="card-tools">
            <div className="input-group float-end">
              <Link to="/permissions/create" className="btn btn-primary float-end"><i className="fa fa-plus-circle mr-2" />Ajouter</Link>
            </div>
          </div>
        </div>
        <div className="card-body table-responsive p-0">
          
        </div>
      </div>
    </div>
  </div>

  )
}

export default ListPermissions