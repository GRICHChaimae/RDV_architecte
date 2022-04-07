<template>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
                <div class="col-md-4 d-flex align-items-center">
                <span class="text-muted">©2022 Architecture Terms of ServicePrivacy PolicyWorldwide</span>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><img src="../assets/icons/facebook logo_icon.png" alt=""></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><img src="../assets/icons/pintrest_icon.png" alt=""></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><img src="../assets/icons/inkedin logo_icon.png" alt=""></a></li>
                </ul>
            </footer>
        </div>
</template>

<script>
export default {
    name:"Footer"
}
</script>

<style lang="scss" scoped>
    $font: "'Times New Roman', Times, serif";
   @mixin center($justify,$align,$direction){
            display: flex;
            flex-direction: $direction !important;
            justify-content: $justify !important;
            align-items: $align !important;
        }
    .footer{
        @include center(space-evenly,center,row);
    }
    .container{
      max-width: 1440px;
    }
    *{
        color: aliceblue;
        font-family: $font;
        font-size: 16px
   }
   li{
       list-style: none;
   }
   img{
       width: 30px;
       height: 30px;
       margin-left: 8px;
   }
   @media (max-width: 480px){
         .footer{
        @include center(space-evenly,center,column);
    }
   }
</style>