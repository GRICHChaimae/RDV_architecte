import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/HomeView.vue";
import Login from "../views/login.vue";
import Client from "../views/client.vue";

const routes = [
    {path: "/", component: Home},
    {path: "/login", component: Login},
    {path: "/client", component: Client},
]


const router = createRouter({
    history: createWebHistory(),
    routes
})


export default router;