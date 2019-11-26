import Vue from 'vue'
import App from './App.vue'
import router from './router/route.js'
import 'bulma/css/bulma.css'
import 'vue-awesome/icons'
import Icon from 'vue-awesome/components/Icon'
import store from './store'
import axios from 'axios';
// import VueAxios from 'vue-axios';
// import VueRouter from 'vue-router';

Vue.component('v-icon', Icon)

require('./bootstrap');

window.Vue = require('vue');

Vue.component('app', require('./App.vue').default);

// Vue.use(VueAxios, axios);

// Vue.use(VueRouter);

// Vue.router=router;

Vue.use(require('@websanova/vue-auth'), {
    auth: require('@websanova/vue-auth/drivers/auth/bearer'),

    http: require('@websanova/vue-auth/drivers/http/axios.1.x'),

    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x'),
});

// App.router = Vue.router;

new Vue({
    router,
    store,
    render: h => h(App),
}).$mount('#app')
