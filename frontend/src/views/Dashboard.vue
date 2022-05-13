<template>
    <div class="container center">
        <div>
          <h1 class="title" >
            Clients informations
          </h1>
        </div>
      <div style="width:100%">
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Preom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">profession</th>
            </tr>
            <tr v-for="item in clients" :key="item.id">
                <td scope="row">{{item.id}}</td>
                <td scope="row">{{item.nom}}</td>
                <td scope="row">{{item.prenom}}</td>
                <td scope="row">{{item.date_de_naissance}}</td>
                <td scope="row">{{item.profession}}</td>
                <td scope="row">
                    <div class="d-flex" id="actions">
                    <div class="edit" >

                            <button style="background:none;border:none;" @click="getData(item)">
                                <img src="../assets/edit.svg" alt="edit svg image">
                            </button>
                    </div>
                    <div class="delete">
                            <button style="background:none;border:none;" @click="supprimer(item.id)">
                                <img src="../assets/delete.svg" alt="edit svg image">
                            </button>
                    </div>
                    </div>
                </td>
            </tr>
        </table>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    </div>
</template>




<script>
import axios from "axios";

export default {
  inject:["changeCurrentData", "currentData"],
  data(){
    return{
      clients: "",
      message: "",
    }
  },
   methods:{
    supprimer(client){
      const endpoint = `http://localhost/RDV_architecte/app/admin/deleteClient/${client}`
      axios.delete(endpoint).then(res => {
        if (res){
          this.clients = this.clients.filter(e => e.id != client)
        }
      })
    },
    getData(data){
      this.changeCurrentData(data);
      this.$router.push("/editClient")
    }
  },
  mounted() {
    const endpoint = "http://localhost/RDV_architecte/app/admin/getAllClients"
    axios.get(endpoint).then(res => {
      if (res){
        this.clients = res.data
      }else {
        this.message = "Aucun client disponible"
      }
    })
  }
}
</script>




// this is some average styling
<style lang="scss" scoped>
@mixin center($justify,$align,$direction){
  display: flex;
  flex-direction: $direction;
  justify-content: $justify;
  align-items: $align;
}
    .container{
      background-image: url("../assets/house-1477041__340.png");
      background-repeat:no-repeat;
      background-size:cover;
      object-fit: cover;
      background-position: center;
      min-height: 100vh;
      max-width : 1440px;
      @include center(flex-start,center,column);
    }
    .table{
      background-color: whitesmoke;
    }

    @media (max-width:480px) {
        .container{
            overflow-x: scroll;
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