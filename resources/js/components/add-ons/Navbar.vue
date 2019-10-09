<template>
    <nav class="navbar" role="navigation">
        <div class="navbar-brand">
            <router-link class="navbar-item" to="/">
                <v-icon class="icon-logo" name="car" size="3x"></v-icon>
                <div class="text-logo">TravelExpress</div>
            </router-link>

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
                    <router-link to="/profil">
                        <v-icon class="navbar-icon" name="user"></v-icon> Profil
                    </router-link>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "navbar",
    
}
</script>

<style lang="scss">
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
</style>