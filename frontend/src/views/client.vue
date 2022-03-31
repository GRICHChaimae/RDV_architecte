<template>

    <div>
        <div class="boody">
            <img src="images/client.png" alt="">
            <div class="container">
                <div class="nav">
                    <p id="logo">Architecture</p>
                    <button type="text">Mes rendez-vous</button>
                </div>
                <form action="post">
                    <div class="body1">
                        <input type="date" name="date_de_naissance" placeholder="Date de naissance" required />
                        <select name="creneau" id="">
                            <option value="0">Select creneau:</option>
                            <option value="">de 10 h à 10:30h</option>
                            <option value="">de 11 h à 11:30h</option>
                            <option value="">de 14 h à 14:30h</option>
                            <option value="">de 15 h à 15:30h</option>
                            <option value="">de 16 h à 16:30h</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</template>

<script>

</script>

<style scoped>
@import "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css";

* {
  padding:0;
  margin: 0;
  box-sizing: border-box;
}

.boody{
    display: flex;
}

img{
    background-size: cover; 
    background-repeat: no-repeat;
    height: 100vh;
    flex-basis: 50%;
    object-fit: cover;
}

#logo{
    margin: 20px 0 30px 15px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: larger;
    
}

button , select {
    border: 2px solid #F9AA04;
    background: none;
    color: #EB6805;
    width: 150px;
    height: 35px;
    margin: 20px 15px 30px 0;
}

select{
    width: 250px;
}

button:hover{
    border: 2px solid #0E8C9B;
    color: #157491;
}

select:hover{
    border: 2px solid #0E8C9B;
    color: #157491;
}

input:hover{
    border: 2px solid #0E8C9B;
    color: #157491;
}

input{
    border: 2px solid #F9AA04;
    background: none;
    color: #EB6805;
    margin: 20px 0 30px 15px;
    width: 250px;
}

.container{
    flex: 1;
}

.nav{
    display: flex;
    justify-content: space-between;
}

.body1{
    display: flex;
    justify-content: space-between;
}

</style>
<style></style>