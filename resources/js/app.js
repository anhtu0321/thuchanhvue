require('./bootstrap');
window.Vue = require('vue');
import appComponent from './app.vue';
const vm = new Vue({
    data: {},
    components: {
        appComponent
    }
});
vm.$mount('#app');