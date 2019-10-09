<template>
    <div class="inscription">
        <navbar></navbar>

        <div class="inscription-form">
            <h1>Inscription</h1>
            
            <div class="field">
                <label class="label">Nom</label>
                <div class="control">
                    <input v-model="newUser.name" class="input" type="text" placeholder="Nom">
                </div>
            </div>
            <div class="field">
                <label class="label">Prénom</label>
                <div class="control">
                    <input v-model="newUser.firstname" class="input" type="text" placeholder="Prénom">
                </div>
            </div>
            <div class="field">
                <label class="label">Nom d'usager</label>
                <div class="control">
                    <input v-model="newUser.username" class="input" type="text" placeholder="Nom d'usager">
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left">
                    <input v-model="newUser.email" class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                        <v-icon name="envelope"></v-icon>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Mot de passe</label>
                <div class="control">
                    <input v-model="newUser.password" class="input" type="password" placeholder="Mot de passe">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-link" @click="addNewUser()">Submit</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from './add-ons/Navbar'
export default {
    name: "inscription",
    data() {
        return {
            newUser: {},
        }
    },
    components: {Navbar},
    methods: {
        addNewUser() {
            axios.post("api/client", {
                name: this.newUser.name,
                firstname: this.newUser.firstname,
                username: this.newUser.username,
                email: this.newUser.email,
                password: this.newUser.password
            }).then(function (response) {
                document.location.reload(true);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    }
}
</script>

<style lang="scss">
.inscription {
    .inscription-form {
        display: flex;
        flex-direction: column;
        width: 500px;
        justify-content: center;
        margin: auto;
    }

}
</style>