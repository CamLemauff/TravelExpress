<template>
    <div class="inscription">
        <navbar></navbar>

        <div class="inscription-form">
            <h1>Inscription</h1>
            <div class="field">
                <label class="label">Nom</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Nom">
                </div>
            </div>
            <div class="field">
                <label class="label">Prénom</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Prénom">
                </div>
            </div>
            <div class="field">
                <label class="label">Nom d'usager</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Nom d'usager">
                </div>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left">
                    <input class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                        <v-icon name="envelope"></v-icon>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Mot de passe</label>
                <div class="control">
                    <input class="input" type="password" placeholder="Mot de passe">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from './add-ons/Navbar'
export default {
    name: "inscription",
    components: {Navbar},
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