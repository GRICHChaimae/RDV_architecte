<template>
  <div class="container">
<div class="form-container">
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
    <p>Etes-vous dèja enregistrer ? <router-link to="/user"><u> Clicker ici {{message}}</u></router-link></p>

  </form>
</div>
  </div>
</template>

<script>
export default {
  data() {
    return {

    }
  },
  mounted() {

  }
}
</script>

<style lang="scss" scoped>
@import "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js";
@mixin center($justify,$align,$direction){
  display: flex;
  flex-direction: $direction;
  justify-content: $justify;
  align-items: $align;
}
      .container{
        background-image: url("../assets/architecture-3357028__340.png");
        background-repeat:no-repeat;
        background-size:cover;
        object-fit: cover;
        width: 100%;
        min-height: 100vh;
        @include center(center, center, column)
      }
      *{
        color: #222222;
      }
</style>