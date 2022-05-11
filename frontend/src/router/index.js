import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/HomeView.vue";
import AddRdv from "../views/AddRdv.vue";
import LoginUser from "../views/LoginUser.vue";
import LoginAdmin from "../views/LoginAdmin.vue";
import Dashboard from "../views/Dashboard.vue";
import ClientDashboard from "../views/ClientDashboard.vue";
import EditClient from "../views/EditClient.vue";
import EditRdv from "../views/EditRdv.vue";
import Acceuil from "../views/Acceuil.vue";

const routes = [
  { path: "/", component: Acceuil },
  { path: "/register", component: Home },
  { path: "/user", component: LoginUser },
  { path: "/admin", component: LoginAdmin },
  { path: "/dashboard", component: Dashboard },
  { path: "/editClient", component: EditClient },
  { path: "/rendez-vous", component: ClientDashboard },
  { path: "/add-rdv", component: AddRdv },
  { path: "/edit-rdv", component: EditRdv },

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
