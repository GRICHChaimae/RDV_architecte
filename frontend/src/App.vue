
<script>
import Footer from "./components/Footer.vue"
import Navigation from "./components/Navigation.vue"
import Header from "./components/Header.vue"
import HeaderDashboard from "./components/HeaderDashboard.vue"
export default {
    component: "app",
    components: {
    Footer,
    Navigation,
    Header,
    HeaderDashboard,
},
methods: {
    
},
computed:{
    isDashboardPage(){
        return this.$router.currentRoute.value.fullPath.includes("/dashboard");
    }
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
    <HeaderDashboard v-if="isDashboardPage"/>
    <Header v-else/>

    <router-view></router-view>
    <Footer />
</div>
</template>

<style lang="scss">

        @import "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css";

        

</style>