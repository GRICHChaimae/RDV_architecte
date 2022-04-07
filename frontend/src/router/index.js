import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/HomeView.vue";
import Client from "../views/client.vue";
import LoginUser from "../views/LoginUser.vue";
import LoginAdmin from "../views/LoginAdmin.vue";
import Dashboard from "../views/Dashboard.vue";
import EditClient from "../views/EditClient.vue";
import ClientDashboard from "../views/ClientDashboard.vue";
import UpdateClient from "../views/UpdateClient.vue";

const routes = [
  { path: "/", component: Home },
  { path: "/user", component: LoginUser },
  { path: "/admin", component: LoginAdmin },
  { path: "/client", component: Client },
  { path: "/dashboard", component: Dashboard },
  { path: "/editClient", component: EditClient },
  { path: "/rendez-vous", component: ClientDashboard },
  { path: "/rdv_update", component: UpdateClient },

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
