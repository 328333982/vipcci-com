import VueRouter from 'vue-router'


let routes = [
    {
        path: '/',
        component:require('./components/AdminComponent'),
    },{
        path: '/edit/:userId',
        component:require('./components/EditComponent'),
        name: 'edit'
    }

]

export default new VueRouter({
    routes,
    // mode: 'history',
    base: '/api/admin/'
})