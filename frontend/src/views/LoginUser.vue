<template>
    <div class="body center">
        <h2 class="title">Login With Your User ID</h2>
        <div class="form-container">
         <form action="" method="post">
                <h4 class="txt-center">User Login</h4>
                <div class="mb-3">
                    <label for="text" class="form-label">User ID</label>
                    <input type="text" autocomplete="on" name="ID" class="form-control" placeholder="ID" required>
                </div>
                <div class="center">
                    <input type="submit" name="submit" class="btn btn-primary my-btn center" value="login">
                    <a href="" class="link-light fs-6 text-decoration-none">forgot my id?</a>
                </div>
            </form>
            </div>
    </div>
</template>


<script></script>
<style lang="scss" scoped>
    @mixin center($justify,$align,$direction){
            display: flex;
            flex-direction: $direction;
            justify-content: $justify;
            align-items: $align;
        }
.center{
        @include center(center,center,column);
}   
.body{
    background-image:url("../assets/city-182223__480.png");
    background-repeat:no-repeat;
    background-size:cover;
    object-fit: cover;
    background-position: center;
    width: 100%;
    height: 70vh;
}
.txt-center{
    text-align: center;
    color: rgb(46, 44, 44);
}
</style>