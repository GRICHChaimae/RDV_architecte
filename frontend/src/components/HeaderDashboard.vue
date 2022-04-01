<template lang="">
    <div>
        <div class="container border-bottom">
        <header class="d-flex justify-content-between py-3">
         <div>
                <h3 id="logo">Admin Dashboard</h3>
        </div> 
      <ul class="nav nav-pills">   
        <li class="nav-item">
           <form class="form">
                <div class="input-group">
                    <div class="form-outline">
                        
                        <input v-model="searchValue" id="search-input" type="search" placeholder="search" class="form-control" />
                        
                    </div>
                <button @click="search" id="search-btn" type="button" class="btn btn-primary">
                    <img src="../assets/SearchVector.svg" alt="">
                </button>
                </div>
               
            </form>
        </li>
        <li class="nav-item">
             <input class="btn btn-primary"  type="submit" value="Logout">
        </li>
      </ul>
    </header>
  </div>
    </div>
</template>
<script>
export default {
    name:"HeaderDash",
    data() {
        return {
            searchValue: "",
            
        }
    },
    methods:{
            searchValue(){
                const inputValue = this.searchValue;
                alert(inputValue);
            }
    }
}
</script>
<style lang="scss" scoped>
@mixin navDash($justify,$align,$direction){
    display: flex;
    justify-content: $justify;
    align-items: $align;
    flex-direction: $direction;
}
    #search-btn{
        height: 38px !important;
    }
    ul{
        @include navDash(space-between,center ,row )     
    }
    li{
        margin: 15px;
    }
@media (max-width:480px) {

    #logo{
        display: none;
    }
    #search-input{
        width: 100%;
    }
}
</style>