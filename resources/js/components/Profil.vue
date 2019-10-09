<template>
    <div class="profil">
        <navbar></navbar>

        <h1>Profil</h1>
        {{clients}}
    </div>
</template>

<script>
import Navbar from './add-ons/Navbar'
export default {
    name: 'profil',
    components: {Navbar},
    data() {
        return {
            clients: [],
        }
    },
    created() {
        this.getClients();
    },
    methods: {
        getClients() {
            axios.get("/api/client").then(response => {
                this.clients = response.data;
            });
        }
    }
    
}
</script>

<style lang="scss">

</style>