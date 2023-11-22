import React from 'react'
import { BrowserRouter, Routes, Route} from "react-router-dom";
import Master from './views/layouts/Master';
import Dashboard from './components/admin/Dashboard';
import ListUsers from './components/admin/users/ListUsers';
// import Master from './views/layouts/Master';
import Welcome from './views/frontend/Welcome';
import Login from './views/auth/Login';
import Register from './views/auth/Register';
// import { render } from '@testing-library/react';
import ListRoles from './components/admin/roles/ListRoles';
import ListPermissions from './components/admin/permissions/ListPermissions';
import CreatePermissions from './components/admin/permissions/CreatePermissions';
import CreateRoles from './components/admin/roles/CreateRoles';


function App() {
  
  return (
    <div className="App">
         <BrowserRouter>
            <Routes>
                <Route path="" element = {<Dashboard/>}>
                  <Route path="/dashboard" element = {<Master/>}></Route>
                  <Route path="/users" element = {<ListUsers/>}></Route>
                  <Route path="/roles" element = {<ListRoles/>}></Route>
                  <Route path="/roles/create" element = {<CreateRoles/>}></Route>
                  <Route path="/permissions" element = {<ListPermissions/>}></Route>
                  <Route path="/permissions/create" element = {<CreatePermissions/>}></Route>
                </Route>
                <Route path="/login" element = {<Login/>}/>
                <Route path="/register" element = {<Register/>}/>
                <Route path="/" element = {<Welcome/>}/>
            </Routes>
        </BrowserRouter>
    </div>
  );
}

export default App;
