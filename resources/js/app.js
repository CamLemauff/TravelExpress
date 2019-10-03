import Vue from 'vue'
import App from './App.vue'
import router from './router/route.js'
import 'bulma/css/bulma.css'
import 'vue-awesome/icons'
import Icon from 'vue-awesome/components/Icon'

Vue.component('v-icon', Icon)

require('./bootstrap');

window.Vue = require('vue');

Vue.component('app', require('./App.vue').default);

new Vue({
    router,
    render: h => h(App),
}).$mount('#app')
