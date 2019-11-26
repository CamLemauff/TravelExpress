<template>
    <div class="profil">
        <navbar></navbar>

        <h1>Profil</h1>
        <br/>

        <p>Username: {{this.data.username}}</p>
        <p>Nom: {{this.data.name}}</p>
        <p>Prénom: {{this.data.firstname}}</p>
        <p>Email: {{this.data.email}}</p>
        <p>Préférences: {{this.data.likes}}, {{this.data.dislikes}}</p>
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
            data: {},
        }
    },
    created() {
        this.getClients();
        this.getDataFromClient();
    },
    methods: {
        getClients() {
            axios.get("/api/client").then(response => {
                this.clients = response.data;
            });
        },
        // updateData(payload) {
        //     console.log("test payload: " + payload);
        //     this.data = payload
        // },
        getDataFromClient() {
            if(this.$attrs.response) {
                this.data = this.$attrs.response;
            }
        }
    },
    
}
</script>

<style lang="scss">

</style>