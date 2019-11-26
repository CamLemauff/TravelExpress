<template>
    <div class="connexion">
        <navbar></navbar>

        <div class="connexion-form">
            <h1>Connexion</h1>

            <div class="field">
                <label class="label">Nom d'usager</label>
                <div class="control">
                    <input v-model="username" class="input" type="text" placeholder="Nom d'usager">
                </div>
            </div>

            <div class="field">
                <label class="label">Mot de passe</label>
                <div class="control">
                    <input v-model="password" class="input" type="password" placeholder="Mot de passe">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link" @click="connexionClient">Submit</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "./add-ons/Navbar"
export default {
    name: "connexion",
    components: {Navbar},
    data() {
        return{
            username: "",
            password: "",
            clients: [],
            loggedClient: "",
            error: false,
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
        },
        connexionClient() {
            for (var i = 0; i<this.clients.length; i++) {
                if(this.username === this.clients[i]['username'] && this.password === this.clients[i]['password']) {
                    var response = this.clients[i];
                    this.$router.push({ name: 'profil', params: { response }});
                }
                else {
                    alert("Mauvais identifiant ou mot de passe !");
                    location.reload();
                }
            }
            
        }
    }
}
</script>

<style lang="scss">
.connexion {
    .connexion-form {
        display: flex;
        flex-direction: column;
        width: 500px;
        margin:auto;
        justify-content: center;
    }
}
</style>