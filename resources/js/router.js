import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Main from './components/pages/Home.vue'
import Product from './components/Pages/Product.vue'
const routes = [
    {
        path: '/',
        name: 'main',
        component: Main

    },
    {
        path: '/product/:id',
        name: 'product',
        component: Product,
        props: true
    },
]
export default new VueRouter({
    mode: 'history',
    routes,
})
