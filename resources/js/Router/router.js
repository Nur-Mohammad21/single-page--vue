import {createRouter,createWebHistory} from 'vue-router'
import Category from '../Components/CategoryComponent.vue'

const routes = [
    {
        path: '/',
        component: Category,
        name: 'category.index'
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})
