<template>
    <div class="index">
        <nav class="navbar" role="navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <v-icon class="icon-logo" name="car" size="3x"></v-icon>
                    <div class="text-logo">TravelExpress</div>
                </a>

                <a 
                    role="button"
                    class="navbar-burger burger"
                    aria-expanded="false"
                    data-target="navbarBurger">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBurger" class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <v-icon class="navbar-icon" name="search"></v-icon> Recherche
                    </div>
                    <div class="navbar-item">
                        <v-icon class="navbar-icon" name="plus-circle"></v-icon> Proposer un trajet
                    </div>
                    <div class="navbar-item">
                        <v-icon class="navbar-icon" name="shopping-cart"></v-icon> Panier
                    </div>
                    <div class="navbar-item">
                        <v-icon class="navbar-icon" name="user"></v-icon> Profil
                    </div>
                </div>
            </div>
        </nav>

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
export default {
    name: "index",
}
</script>

<style lang="scss">
@import '../variables.scss';

    .index {
        .navbar {
            .navbar-item {
                color: #2096ba;

                .icon-logo {
                    width: 40px;
                    height: 40px;
                    margin-right: 5px;
                }

                .navbar-icon {
                    width: 20px;
                    height: 20px;
                    margin-right: 5px;
                }

                .text-logo {
                    font-weight: bold;
                }
            }
        }

        .index-title {
            width: 100%;
            height: 450px;
            display: flex;
            flex-direction: column;
            background-image: url('../assets/car_index.jpg');
            background-size: 100% 450px;

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