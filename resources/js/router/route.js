import Vue from 'vue'
import Router from 'vue-router'
import Index from '../components/Index.vue'
import Inscription from '../components/Inscription.vue'
import Connexion from '../components/Connexion.vue'
import Profil from '../components/Profil.vue'
import Search from '../components/Search.vue'
import AddTravel from '../components/AddTravel.vue'
import Detail from '../components/Detail.vue'

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
        {
            path: '/connexion',
            name: 'connexion',
            component: Connexion,
        },
        {
            path: '/profil',
            name: 'profil',
            component: Profil,
            props: true,
        },
        {
            path: '/search',
            name:'search',
            component: Search,
            props: true
        },
        {
            path: '/addtravel',
            name: 'addtravel',
            component: AddTravel
        },
        {
            path: '/detail/:travelId',
            name: 'detail',
            component: Detail,
            props: true
        }

    ]
})
