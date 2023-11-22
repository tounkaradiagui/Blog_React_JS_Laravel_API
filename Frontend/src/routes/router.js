import Welcome from '../views/frontend/Welcome';
import Login from './../views/auth/Login';
import Register from './../views/auth/Register';
import Master from './../views/layouts/Master';
import ListUsers from '../components/admin/users/ListUsers';

const router = [
    {path: '/*', name: "Welcome", element:<Welcome/>},

    {path: '/login', name: "Login", element:<Login/>},

    {path: '/register', name: "Register", element:<Register/>},

    {path: '/admin/dashboard', name: "Dashboard", element:<Master/>},

    {path: '/admin', name: "Admin"},

    {path: '/admin/users', name: "ListUsers", element:<ListUsers/>}
]

export default router;

