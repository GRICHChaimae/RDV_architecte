<template>
<div class="home-content">
  <h1 class="title center">Ajouter un rendez-vous</h1>
    <div class="form">
       <router-link to="rendez-vous">
         <button type="text" class="btn btn-primary">Mes rendez-vous</button>
       </router-link>
        <form action="post" @submit.prevent="submit">
            <div class="form-body">
              <div class="col-md-6">
                <label for="date" class="form-label">Date du rendez-vous</label>
                <input type="date" placeholder="Date" :min="today" class="form-control" v-model.lazy="date" @change="checkAvailable" required />
              </div>
              <div class="col-md-4">
                <label for="creneau" class="form-label">Créneau:</label>
                <select name="creneau" class="form-select" v-model="creneau">
                    <option disabled value="0">Selecter le Créneau desirer:</option>
                    <option v-for="option in options" v-bind:value="option">{{option}}</option>
<!--                    <option value="1">10h-10h:30</option>-->
<!--                    <option value="2">11h-11h:30</option>-->
<!--                    <option value="3">14h-14h:30</option>-->
<!--                    <option value="4">15h-15h:30</option>-->
<!--                    <option value="5">16h-16h:30</option>-->
                </select>
              </div>
            </div>
                <p id="paragraphe">Sujet de rendez-vous</p>
                <textarea  id="" cols="63" rows="10" v-model="sujet" placeholder="C'est quoi votre sujet ?" class="form-control"></textarea>
                <input type="submit" name="submit" class="btn btn-primary my-btn" value="Confirmer">
          <div class="alert alert-success" v-if="success" role="alert"  >
            Rendez-vous a été créer avec succèe le {{this.date}}.
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
        options: [
          "10h-10h:30",
          "11h-11h:30",
          "14h-14h:30",
          "15h-15h:30",
          "16h-16h:30",
        ],
        dateTime: [],
        today: new Date(new Date().setDate(new Date().getDate() + 1)).toJSON().slice(0, 10),
        date : "",
        sujet : "",
        creneau : "",
        user_id : localStorage.getItem('id'),
        success: false,

      }
    },
    methods:{
      submit(){
        const endpoint = "http://localhost/RDV_architecte/app/rdv/addRdv"
        axios.post(endpoint ,{
          date : this.date,
          sujet : this.sujet,
          creneau : this.creneau,
          user_id : this.user_id
        }).then(res => {
          if (res.data){
            this.success = true;
          }else {
            console.log("error")
          }
        })
      },
      checkAvailable(){
        const endpoint = `http://localhost/RDV_architecte/app/rdv/checkDate`;
        axios.post(endpoint,{
         date: this.date
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

<style lang="scss" scoped>
@import "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css";

@mixin center($justify,$align,$direction){
            display: flex;
            flex-direction: $direction;
            justify-content: $justify;
            align-items: $align;
  }

 * {
    box-sizing: border-box;
  }

  .center{
        @include center(space-evenly,center,column);
    }
.title{
    letter-spacing: 1rem;
    text-decoration: wavy;
    font-weight: 600;
    font-style: italic;
    text-transform: uppercase;
    background: rgba(255, 255, 255, 0.107);
    text-align: center;
}

  .home-content{
    background-image: url("../assets/architecture-3357028__340.png");
    background-repeat:no-repeat;
    background-size:cover;
    object-fit: cover;
    @include center(center,center,column);
}

  .form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: whitesmoke;
    background-color: whitesmoke;
    margin-left:50%;
    padding: 20px;
    width: fit-content;
    margin:auto;
    margin-top: 2rem;
    margin-bottom: 2rem;
  }


  #submit{
    width: 100px;
    margin-bottom: 10px;
    line-height: 1.5;
  }

  .form-body{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

</style>
