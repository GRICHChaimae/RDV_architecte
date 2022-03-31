<template >
    <div>
        <div class="footer">
            <p>©2022 Architecture Terms of ServicePrivacy PolicyWorldwide</p>
            <div id="icones">
            <img src="images/insta.png" alt="" class="icone">
            <img src="images/twitter.png" alt="" class="icone">
            <img src="images/facebook.png" alt="" class="icone">
        </div>
</div>
    </div>
</template>

<script>
export default {
    name:"Footer"
}
</script>

<style>

    .footer {
    background-color: black;
    color: white;
    height: auto;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    }

    #icones {
    display: flex;
    }
    
    #icones .icone {
    width: 30px !important;
    height: 30px;
    margin-left: 10px;
    }

</style>