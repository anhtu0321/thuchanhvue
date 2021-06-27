import Vue from 'vue'
import VueRouter from 'vue-router'
import index from './components/customer/index.vue'
import show from './components/customer/show.vue'
Vue.use(VueRouter);
const router = new VueRouter({
    routes:[
        {path:'/admin/customer', component: index},
        {path:'/admin/customer/show', component: show}
    ]
});
export default router