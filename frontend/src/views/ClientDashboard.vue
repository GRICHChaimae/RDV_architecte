<template>
    <div class="home-content"> 
        <h1 class="title center">Edit OR Delete YourAppointment</h1>
        <router-link to="add-rdv">
          <button type="reset" class="btn btn-primary mybtn">
            Ajouter Rendez-vous
          </button>
        </router-link>
    <div class="container">
        <table class="table">
            <tr>
                <th scope="col">Jour</th>
                <th scope="col">Creneau</th>
                <th scope="col">Sujet de rendez-vous</th>
                <th scope="col">Action</th>
            </tr>
            <tr v-for="item in rdv" :key="item.id">
                <td scope="row">{{item.date}}</td>
                <td scope="row">{{item.creneau}}</td>
                <td scope="row">{{item.sujet}}</td>
                <td scope="row">
                    <div class="d-flex" id="actions">
                    <span class="edit" >
                            <button style="background:none;border:none;" @click="getdata(item)">
                                <img src="../assets/edit.svg" alt="edit svg image">
                            </button>
                    </span>
                    <span class="delete">
                            <button style="background:none;border:none;" @click="supprimer(item.id)">
                                <img src="../assets/delete.svg" alt="edit svg image">
                            </button>
                    </span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    </div>
</template>
<script>
import axios from "axios";


export default {
  inject: ["currentRdv","changedRdv"],
    data(){
      return{
        rdv: "",
      }
    },
    mounted() {
      const id = localStorage.getItem("id")
      const  endpoint = `http://localhost/RDV_architecte/app/rdv/getAllRdv/${id}`
      axios.get(endpoint).then(res => {
        this.rdv = res.data
      })
    },
  methods:{
    supprimer(rdv){
      const endpoint = `http://localhost/RDV_architecte/app/rdv/delete/${rdv}`
      axios.delete(endpoint).then(res => {
        if (res){
          this.rdv = this.rdv.filter(e => e.id != rdv)
        }
      })
    },
    getdata(data){
        this.changedRdv(data);
        this.$router.push('/edit-rdv')
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
  .mybtn{
    margin-bottom:20px ;
  }
  .home-content{
    background-image: url("../assets/house-1477041__340.png");
    background-repeat:no-repeat;
    background-size:cover;
    object-fit: cover;
    max-width : 1440px;
    @include center(flex-start,center,column);

}
.container{
    background-color: whitesmoke;
}

.center{
        @include center(space-evenly,center,column);
    }
.title{
    margin-top: 2rem;
    letter-spacing: 1rem;
    text-decoration: wavy;
    font-weight: 600;
    text-transform: uppercase;
    background: rgba(255, 255, 255, 0.107);
    text-align: center;

}

    @media (max-width:480px) {
        .title{
          letter-spacing: 5px;
        }
        th{
            font-size: 10px;
            text-align: center;
        }
        td{
            font-size: 10px;
            text-align: center;
            align-content: center;
        }
        img{
            height: 15px;
            width: 15px;
        }
    }
</style>