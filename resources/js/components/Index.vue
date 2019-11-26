<template>
    <div class="index">
        <navbar></navbar>

        <div class="index-title">
            <div class="title">Covoiturage : choisissez le trajet qui vous convient le mieux </div>
            <div class="index-title-button">
                <router-link to="/inscription" class="button">Inscription</router-link>
                <router-link to="/connexion" class="button">Connexion</router-link>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from './add-ons/Navbar'
export default {
    name: "index",
    components: {Navbar},
}
</script>

<style lang="scss">
@import '../variables.scss';

    .index {

        .index-title {
            width: 100%;
            height: 450px;
            display: flex;
            flex-direction: column;
            background-image: url('../assets/cover_travel_express.png');
            background-size: cover;

            .title {
                width: 100%;
                color: white;
                text-align: center;
                font-weight: bold;
                margin-top: 11rem;
            }

            .index-title-button {
                display: flex;
                flex-direction: row;
                justify-content: center;

                .button {
                    width: 100px;
                    background: #2096ba;
                    color: white;
                    font-weight: bold;
                    border: none;
                    border-radius: 20px;
                    margin-left: 10px;
                    padding: 5px;
                }
            }
        }
    }

</style>