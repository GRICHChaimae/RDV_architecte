import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/HomeView.vue";
import Client from "../views/client.vue";
import LoginUser from "../views/LoginUser.vue";
import LoginAdmin from "../views/LoginAdmin.vue";
import Dashboard from "../views/Dashboard.vue";
import EditUser from "../views/EditUser.vue";

const routes = [
  { path: "/", component: Home },
  { path: "/user", component: LoginUser },
  { path: "/admin", component: LoginAdmin },
  { path: "/client", component: Client },
  { path: "/dashboard", component: Dashboard },
  { path: "/editUser", component: EditUser },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
