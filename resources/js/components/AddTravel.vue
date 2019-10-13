<template>
    <div class="add-travel">
        <navbar></navbar>

        <div class="add-travel-form">
            <h1>Proposer un trajet</h1>

            <div class="field">
                <label class="label">Ville de départ</label>
                <div class="control">
                    <input v-model="newTravel.start_city" class="input" type="text" placeholder="Ville de départ">
                </div>
            </div>
            <div class="field">
                <label class="label">Adresse de départ</label>
                <div class="control">
                    <input v-model="newTravel.start_address" class="input" type="text" placeholder="Adresse de départ">
                </div>
            </div>
            <div class="field">
                <label class="label">Heure de départ</label>
                <div class="control">
                    <input v-model="newTravel.start_hour" class="input" type="text" placeholder="Heure de départ">
                </div>
            </div>
            <div class="field">
                <label class="label">Ville d'arrivée</label>
                <div class="control">
                    <input v-model="newTravel.finish_city" class="input" type="text" placeholder="Ville d'arrivée">
                </div>
            </div>
            <div class="field">
                <label class="label">Adresse d'arrivée</label>
                <div class="control">
                    <input v-model="newTravel.finish_address" class="input" type="text" placeholder="Adresse d'arrivée">
                </div>
            </div>
            <div class="field">
                <label class="label">Heure d'arrivée</label>
                <div class="control">
                    <input v-model="newTravel.finish_hour" class="input" type="text" placeholder="Heure d'arrivée">
                </div>
            </div>
            <div class="field">
                <label class="label">Prix demandé</label>
                <div class="control">
                    <input v-model="newTravel.price" class="input" type="text" placeholder="Prix demandé">
                </div>
            </div>
            <div class="field">
                <label class="label">Places disponibles</label>
                <div class="control">
                    <input v-model="newTravel.available_seats" class="input" type="text" placeholder="Places disponibles">
                </div>
            </div>
            <div class="field">
                <label class="label">Préférences</label>
                <div class="control">
                    <input v-model="newTravel.preferences" class="input" type="text" placeholder="Préférences">
                </div>
            </div>
            <div class="field">
                <label class="label">Nom du chauffeur</label>
                <div class="control">
                    <input v-model="newTravel.driver" class="input" type="text" placeholder="Nom du chauffeur">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-link" @click="addNewTravel()">Submit</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from './add-ons/Navbar'
export default {
    name: 'addtravel',
    data() {
        return {
            newTravel: {}
        }
    },
    components: {Navbar},
    methods: {
        addNewTravel() {
            axios.post("api/travel", {
                start_hour: this.newTravel.start_hour,
                start_city: this.newTravel.start_city,
                start_address: this.newTravel.start_address,
                finish_hour: this.newTravel.finish_hour,
                finish_city: this.newTravel.finish_city,
                finish_address: this.newTravel.finish_address,
                price: this.newTravel.price,
                available_seats: this.newTravel.available_seats,
                preferences: this.newTravel.preferences,
                driver: this.newTravel.driver,
                id_driver: 1
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
.add-travel {
    .add-travel-form {
        display: flex;
        flex-direction: column;
        width: 500px;
        justify-content: center;
        margin: auto;
    }
}
</style>