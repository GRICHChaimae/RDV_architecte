<template>
    <div class="body center">
      <h2 class="title">Login With Your User ID</h2>
        <div class="form-container">
         <form action="" method="post" @submit.prevent="submit">
                <h4 class="txt-center">User Login</h4>
                <div class="mb-3">
                    <label for="ID" class="form-label">User ID</label>
                    <input v-model="ref" type="text" autocomplete="on" name="ID" class="form-control" placeholder="ID" required>
                </div>
                <div class="center">
                    <input type="submit" name="submit" class="btn btn-primary my-btn center" value="login">
                    <a href="" class="link-light fs-6 text-decoration-none">forgot my id?</a>
                </div>
            </form>
            </div>
    </div>
</template>



<script>
      import axios from "axios";
      import {ref} from "vue";

      export default {


        data(){
          return{
            ref: "",
          }
        },
        methods:{
          submit: function () {
            const endpoint = "http://localhost/RDV_architecte/app/user/checkByRef"
            axios.post(endpoint, {reference: this.ref}).then(res => {
              if (res.data === false){
                alert("Votre ID est n'est pas valide")
              }else {
                localStorage.setItem("user_id", this.ref);
                localStorage.setItem("id",res.data.id)
                console.log(localStorage);
                this.$router.push('/rendez-vous')
              }
              // if (!res.data.reference) {
              //   console.log("wrong connection");
              //   return;
              // }else{
              //   localStorage(res.data)
              //   console.log(localStorage)
              //   this.$router.push('/rdv_update')
              // }
            });

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
    background-image:linear-gradient(to top, rgba(255, 255, 255, 0.27), rgba(196, 196, 100, 0.3)),url("../assets/city-182223__480.png");
    background-repeat:no-repeat;
    background-size:cover;
    object-fit: cover;
    background-position: center;
    width: 100%;
    height: 100vh;
}
.txt-center{
    text-align: center;
    color: rgb(46, 44, 44);
}
</style>