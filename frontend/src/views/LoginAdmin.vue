<template>
    <div class="body center">
        <h2 class="title txt-center">Admin Login</h2>
        <div class="form-container m-3">
         <form method="post" @submit.prevent="login">
                <h4 class="txt-center">Admin Login</h4>
                <div class="mb-3">
                    <label for="text" class="form-label">Username</label>
                    <input type="text" autocomplete="on" v-model="username" name="email" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Password</label>
                    <input type="password"  v-model="password" name="password" class="form-control" placeholder="password" required>
                </div>
                <div class="center">
                    <input type="submit" name="submit" class="btn btn-primary my-btn center" value="login">
                    <a href="" class="link-light fs-6 text-decoration-none">forgot my password?</a>
                </div>
            </form>
            </div>
    </div>
</template>


<script>
import axios from "axios";

export default {
    data(){
      return{
          username: "",
          password: "",
      }
    },
    methods:{
      login(){
        const endpoint = 'http://localhost/RDV_architecte/app/admin/auth'
        axios.post(endpoint,{
          username: this.username,
          password: this.password,
        }).then(res => {
          console.log(res.data)
        })
        this.$router.push('/dashboard')
      }
    }
}
</script>
<style lang="scss" scoped>
    @mixin center($justify,$align,$direction){
            display: flex;
            flex-direction: $direction;
            justify-content: $justify;
            align-items: $align;
        }
.center{
        @include center(center,center,column);
}   
.body{
    background-image:url("../assets/house-1477041__340.png");
    background-repeat:no-repeat;
    background-size:cover;
    object-fit: cover;
    background-position: center;
    max-width: 1440px;
}
.txt-center{
    text-align: center;
    color: rgb(46, 44, 44);
}
.title{
  margin-top: 2rem;
  letter-spacing: 1rem;
  text-decoration: wavy;
  font-weight: 600 ;
  text-transform: uppercase;
  text-align: center;
  color: antiquewhite;
}
</style>