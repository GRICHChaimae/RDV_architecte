<template>

    <div>
    <!-- <Navigation/> -->
        <div class="boody">
            <img src="images/architecture1.png" alt="">
        <div class="body2">
            <div>
                <p id="logo">Architecture</p>
            </div>   
        <form method="post" class="form">
        <div class="inpt">
        <label>Nom</label>
        <input type="text" name="nom" placeholder="Entrez votre nom" required>
        </div>
        <div class="inpt">
        <label>Prenom</label>
        <input type="text" name="prenom" placeholder="Entrez votre prenom" required>
        </div>
        <div class="inpt">
        <label>Profession</label>
        <input type="text" name="Profession" placeholder="Entrez votre profession" required>
        </div>
        <div class="inpt">
        <label>Date de naissance</label>
        <input type="date" name="date_de_naissance" placeholder="Date de naissance" required>
        </div>
        <div class="submit">
        <input type="submit" name="submit" id="submit">
        </div>
        <p>Etes-vous deja un ... ? <span>Clicker ici</span></p>
    </form>
    </div>
    </div>
    </div>
    
</template>

<script>
// import Navigation from "../components/Navigation.vue";
// export default {
//     components: {
//     Navigation
// }
// }
</script>

<style>
@import "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css";

* {
  padding:0;
  margin: 0;
  box-sizing: border-box;
}

.boody{
    display: flex;
}

.body2{
    display: flex;
    flex-direction: column;
}

.inpt{
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

img{
    background-size: cover; 
    background-repeat: no-repeat;
    height: 100vh;
    flex-basis: 50%;
}

.form{
    background-color: #157491;
    margin: auto;
    padding: 20px;
    width: 30%;
    height: 58vh;
    color: whitesmoke;
}

.form input{
    background-color: #157491;
    border: none;
    border-bottom: 1px solid #F9AA04;
}

#submit{
    border: 1px solid #F9AA04;
    color: #EB6805;
    width: 150px;
    margin-bottom: 10px;
}

p span{
    color: #EB6805;
}

#logo{
    margin-bottom: 0px;
    display: block;
}

</style>