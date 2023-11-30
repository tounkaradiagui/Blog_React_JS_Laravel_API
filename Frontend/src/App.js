import React from 'react'
import { BrowserRouter, Routes, Route} from "react-router-dom";
import Master from './views/layouts/Master';
import Dashboard from './components/admin/Dashboard';
import ListUsers from './components/admin/users/ListUsers';

// import views screens
import Welcome from './views/frontend/Welcome';
import Login from './views/auth/Login';
import Register from './views/auth/Register';

// import component screens;
import ListRoles from './components/admin/roles/ListRoles';
import ListPermissions from './components/admin/permissions/ListPermissions';
import CreatePermissions from './components/admin/permissions/CreatePermissions';
import CreateRoles from './components/admin/roles/CreateRoles';
import ListCategory from './components/categories/ListCategory';


function App() {
  
  return (
    <div className="App">
         <BrowserRouter>
            <Routes>
                <Route path="" element = {<Welcome/>}/>
                <Route path="/login" element = {<Login/>}/>
                <Route path="/register" element = {<Register/>}/>
                <Route path="admin" element = {<Dashboard/>}>
                  <Route path="dashboard" element = {<Master/>}></Route>
                  <Route path="users" element = {<ListUsers/>}></Route>
                  <Route path="roles" element = {<ListRoles/>}></Route>
                  <Route path="roles/create" element = {<CreateRoles/>}></Route>
                  <Route path="permissions" element = {<ListPermissions/>}></Route>
                  <Route path="permissions/create" element = {<CreatePermissions/>}></Route>
                  <Route path="categories/lists" element = {<ListCategory/>}></Route>
                </Route>
            </Routes>
        </BrowserRouter>
    </div>
  );
}

export default App;
