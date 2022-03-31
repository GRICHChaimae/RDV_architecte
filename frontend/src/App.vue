
<script>
import Footer from "./components/Footer.vue"
import Navigation from "./components/Navigation.vue"
export default {
    component: "app",
    components: {
    Footer,
    Navigation
}
}
</script>

<template>
<div id="app">
    <!-- <div>
        navigation
        <router-link to="/login">login</router-link>
        <router-link to="/">login</router-link>
    </div> -->
    <router-view></router-view>
    <Footer/>
</div>
</template>

<style>
        @import "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css";
</style>