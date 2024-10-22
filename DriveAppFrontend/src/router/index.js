import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import StartView from '../views/StartView.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: StartView
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/LoginView.vue')
    },
    {
      path: '/register',
      name: 'register',
      component: () => import('../views/RegisterView.vue')
    },

    {
      path: '/start',
      name: 'start',
      component: () => import('../views/StartView.vue')
    },
    {
      path: '/create',
      name: 'create',
      component: () => import('../views/CreateOrder.vue')
    },
    {
      path: '/accept',
      name: 'accept',
      component: () => import('../views/AcceptRideView.vue')
      
    }
      
    ]
})

export default router
