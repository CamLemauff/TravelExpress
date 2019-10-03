<template>
    <div class="connexion">
        <navbar></navbar>

        <div class="connexion-form">
            <h1>Connexion</h1>

            <div class="field">
                <label class="label">Nom d'usager</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Nom d'usager">
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
import Navbar from "./add-ons/Navbar"
export default {
    name: "connexion",
    components: {Navbar}
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