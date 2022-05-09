<template>
  <div class="home-content center">
    <h1 class="title center">Fill up the form</h1>
    <!-- <Navigation/> -->
    <div class="form-container">
      <form action="post" @submit.prevent="submit">
        <div class="form-body">
          <div class="col-md-6">
            <label for="date" class="form-label">Date du rendez-vous</label>
            <input type="date" placeholder="Date" :min="today" class="form-control" v-model="data.date" @change="checkAvailable" required />
          </div>
          <div class="col-md-4">
            <label for="creneau" class="form-label">Créneau:</label>
            <select name="creneau" class="form-select" v-model="data.creneau">
              <option v-for="option in options" v-bind:value="option">{{option}}</option>
<!--              <option value="1">10h-10h:30</option>-->
<!--              <option value="2">11h-11h:30</option>-->
<!--              <option value="3">14h-14h:30</option>-->
<!--              <option value="4">15h-15h:30</option>-->
<!--              <option value="5">16h-16h:30</option>-->
            </select>
          </div>
        </div>
        <p id="paragraphe">Sujet de rendez-vous</p>
        <textarea  id="" cols="63" rows="10" v-model="data.sujet" placeholder="C'est quoi votre sujet ?" class="form-control"></textarea>
        <div>
        <input type="submit" name="submit" class="btn btn-primary my-btn" value="Confirmer">

          <router-link to="/rendez-vous">
            <input type="submit" name="submit" class="btn btn-danger" value="Annuler">
          </router-link>
        </div>
      </form>

    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  inject: ["currentRdv","changedRdv"],
  data(){
    return {
      options:[
        "10h-10h:30",
        "11h-11h:30",
        "14h-14h:30",
        "15h-15h:30",
        "16h-16h:30",
      ],
      dateTime: [],
      today: new Date(new Date().setDate(new Date().getDate() + 1)).toJSON().slice(0, 10),
      data: this.currentRdv,
    }
  },
  methods:{
    submit(){
      const endpoint = "http://localhost/RDV_architecte/app/rdv/update"
      axios.post(endpoint ,{
        id : this.data.id,
        date : this.data.date,
        sujet : this.data.sujet,
        creneau : this.data.creneau
    }).then(res => {
        this.$router.push('/rendez-vous')
    })
    },
    checkAvailable(){
      const endpoint = `http://localhost/RDV_architecte/app/rdv/checkDate`;
      axios.post(endpoint,{
        date: this.data.date
      }).then(res => {
        if (res.data != "errore"){
          this.dateTime = res.data.map(res => res.creneau);
          this.options = this.options.filter((i) => !this.dateTime.includes(i))
        }
      })
    }
  }
}
</script>

<style>

</style>