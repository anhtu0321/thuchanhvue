require('./bootstrap');
window.Vue = require('vue');
import router from './router.js';
import appComponent from './app.vue';
const vm = new Vue({
    data: {},
    components: {
        appComponent
    },
    router
});
vm.$mount('#app');