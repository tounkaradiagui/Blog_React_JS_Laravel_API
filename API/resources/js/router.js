import Dashboard from './components/Dashboard.vue';
import User from './components/User.vue';
import Setting from './components/Setting.vue';
import Documentation from './components/Documentation.vue';



export default[
    {
        path: '/admin/dashboard',
        name: 'admin.dashboard',
        component: Dashboard
    },

    {
        path: '/admin/users-list',
        name: 'users.index',
        component: User
    },

    {
        path: '/admin/settings',
        name: 'settings.index',
        component: Setting
    },

    {
        path: '/admin/documentation',
        name: 'documentation.index',
        component: Documentation
    }
]