<template lang="">
    <div>
    <div class="container center">
        <table class="table">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Preom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">rendez-vous</th>
                <th scope="col">Sujet de rendez-vous</th>
                <th scope="col">Action</th>
            </tr>
            <tr>
                <td scope="row">test</td>
                <td scope="row">test</td>
                <td scope="row">test</td>
                <td scope="row">test</td>
                <td scope="row">test</td>
                <td scope="row">
                    <div class="d-flex">
                    <span class="edit" >
                        <form action="">
                            <input type="hidden" name="edit" >
                            <button style="background:none;border:none;">
                                <router-link to="/editUser">
                                <img src="../assets/edit.svg" alt="edit svg image">
                                </router-link>
                            </button>
                        </form>
                    </span>
                    <span class="delete">
                        <form action="">
                            <input type="hidden" name="edit" >
                            <button style="background:none;border:none;">
                                <router-link to="">
                                <img src="../assets/delete.svg" alt="edit svg image">
                                </router-link>
                            </button>
                        </form>
                    </span>
                    </div>
                   
                </td>
            </tr>
        </table>
    </div>    
    </div>
</template>
<script>
export default {
    
}
</script>
<style lang="scss">
    span{
        gap:10px;
    }

    @media (max-width:480px) {
        .container{
            overflow-x: scroll;
        }
    }
</style>