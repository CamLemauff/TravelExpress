import Vue from 'vue'
import Router from 'vue-router'
import Index from '../components/Index.vue'
import  Inscription from '../components/Inscription.vue'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'index',
            component: Index
        },
        {
            path: '/inscription',
            name: 'inscription',
            component: Inscription
        },
    ]
})