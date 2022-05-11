<template>

    <div class="home-content center">
        <h1 class="title center">Fill up the form</h1>
    <!-- <Navigation/> -->
        <div class="form-container mb-5">
            <form class="mb-3" method="post" @submit.prevent="submit">
            <div class="inpt">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom" v-model="nom" required>
            </div>
            <div class="inpt">
            <label>Prenom</label>
            <input type="text" name="prenom" class="form-control" placeholder="Entrez votre prenom" v-model="prenom" required>
            </div>
            <div class="inpt">
            <label>Profession</label>
            <input type="text" name="Profession" class="form-control" placeholder="Entrez votre profession" v-model="profession" required>
            </div>
            <div class="inpt">
            <label>Date de naissance</label>
            <input type="date" name="date_de_naissance" class="form-control" max="2005-12-31" placeholder="Date de naissance" v-model="date" required>
            </div>
            <div class="center">
            <input type="submit" name="submit" class="btn btn-primary my-btn center" >
            </div>
            <p>Etes-vous dèja enregistrer ? <router-link to="/user"><u> Clicker ici </u></router-link></p>
            </form>
          <div class="alert alert-success" v-if="success" role="alert"  >
            {{ref}}
          </div>
          <div class="alert alert-warning" role="alert" v-if="wrong">
            une erreur est introduit!
          </div>
        </div>
    </div> 
</template>

<script>
import axios from "axios";

export default {
    data(){
      return{
        nom: "",
        prenom: "",
        profession: "",
        date: "",
        ref: "",
        success: false,
        wrong: false
      }
    },
    methods:{
      submit(){
        const endpoint = "http://localhost/RDV_architecte/app/user/addUser"
        axios.post(endpoint ,{
          nom : this.nom,
          prenom : this.prenom,
          profession : this.profession,
          date : this.date
        }).then(res => {
          if (res.data === false){
            this.wrong = true
          }else {
            this.success = true
            this.ref = `Your reference is "${res.data.reference}" please copy it`
            console.log(res.data)
          }
        })
      }
    }
}
</script>

<style lang="scss">
@import "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css";
@mixin center($justify,$align,$direction){
            display: flex;
            flex-direction: $direction;
            justify-content: $justify;
            align-items: $align;
        }
.center{
        @include center(space-evenly,center,column);
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
.form-container{
    background-color: whitesmoke;
    margin-top: 2rem;
    padding: 10px;
    width:35%;
    height: auto;
    color: whitesmoke;
}
.my-btn{
    width: 35% !important;
    margin: 10px;
}
.home-content{
    background-image: linear-gradient(to top, rgba(255, 255, 255, 0.50), rgba(51, 51, 173, 0.35)), url("../assets/architecture-3357028__340.png");
    background-repeat:no-repeat;
    background-size:cover;
    object-fit: cover;
    max-width: 1440px;
    min-height: 100vh;
}
@media (max-width: 480px){
    .form-container{
    background-color: whitesmoke;
    margin: auto;
    padding: 10px;
    width:95%;
    color: whitesmoke;
}
    .title{
    font-size: medium;
    width: 100%;
    letter-spacing: 0.5rem;
    }
}
</style>