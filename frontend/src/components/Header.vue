<template>
    <div>
        <div class="container border-bottom">
        <header class="d-flex justify-content-between py-3">
         <div>
                <h3 id="logo">Architecture</h3>
        </div> 
      <ul class="nav nav-pills">
        <li class="nav-item"><router-link to="/"><span class="nav-link" aria-current="page">Home</span></router-link></li>
        <li class="nav-item"><router-link to="/register"><span class="nav-link">Register</span></router-link></li>
        <li class="nav-item">
           <div class="dropdown">
                <span class="btn btn-primary dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Login
                </span>

             <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
               <router-link to="/user" ><li><span class="dropdown-item">User</span></li> </router-link>
               <router-link to="/admin"><li><span class="dropdown-item">Admin</span></li></router-link>
             </ul>
            </div>
        </li>
      </ul>
    </header>
  </div>
    </div>
</template>
<script setup>

</script>
<style lang="scss" scoped>
    li{
        list-style: none;
    }
    .container{
      max-width: 1440px;
    }
    a{
        list-style: none !important;
        text-decoration: none !important;
    }
    @media (max-width:480px) {
        #logo{
            display: none;
        }
        header{
            display: flex !important;
            justify-content: center !important;
        }
    }
</style>