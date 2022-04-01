<template lang="">
    <div class="home-content center">
        <h1 class="title center">Modification Utilisateur</h1>
    <!-- <Navigation/> -->
        <div class="form-container">   
            <form class="row g-3 p-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="email" name="nom" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="col-12">
                    <label for="profession" class="form-label">Profession</label>
                    <input type="text" name="profession" class="form-control" >
                </div>
                <div class="col-12">
                    <label for="sujet" class="form-label">Sujet</label>
                    <textarea name="sujet" class="form-control" cols="" rows=""></textarea>
                </div>
                <div class="col-md-6">
                    <label for="ddn" class="form-label">Date de naissance</label>
                    <input type="date" name="ddn" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="rdv" class="form-label">Date de rendez-vous</label>
                    <input type="date" name="rdv" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="creneau" class="form-label">Créneau</label>
                    <input type="hidden" name="creneau">
                    <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="col-12">
                    
                    <input type="submit" class="btn btn-primary" value="Confirmer">
                </div>
            </form>
        </div>
    </div> 
</template>
<script>
export default {
    
}
</script>
<style lang="scss">
    form{
        color: black;
    }
    .form-container{
        margin-bottom:50px ;
    }
</style>