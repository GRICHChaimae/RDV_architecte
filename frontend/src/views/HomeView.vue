<template>

    <div class="home-content center">
        <h1 class="title center">Fill up the form</h1>
    <!-- <Navigation/> -->
        <div class="form-container">   
            <form class="mb-3" method="post" >
            <div class="inpt">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom" required>
            </div>
            <div class="inpt">
            <label>Prenom</label>
            <input type="text" name="prenom" class="form-control" placeholder="Entrez votre prenom" required>
            </div>
            <div class="inpt">
            <label>Profession</label>
            <input type="text" name="Profession" class="form-control" placeholder="Entrez votre profession" required>
            </div>
            <div class="inpt">
            <label>Date de naissance</label>
            <input type="date" name="date_de_naissance" class="form-control"  placeholder="Date de naissance" required>
            </div>
            <div class="center">
            <input type="submit" name="submit" class="btn btn-primary my-btn center">
            </div>
            <p>Etes-vous deja un ... ? <span>Clicker ici</span></p>
            </form>
        </div>
    </div> 
</template>

<script>
// import Navigation from "../components/Navigation.vue";
/*  export default {
    components: {
//     Navigation

 }
} */
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
    font-weight: 600 bolder;
    font-style: italic;
    text-transform: uppercase;
    background: rgba(255, 255, 255, 0.107);
    text-align: center;

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
    background-image: url("../assets/architecture-3357028__340.png");
    background-repeat:no-repeat;
    background-size:cover;
    object-fit: cover;
    width: 100%;
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