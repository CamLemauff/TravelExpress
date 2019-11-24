<template>
    <div  class="detail">
        <div class="card">
            <div class="card-content">
                <h2> Départ :  </h2>
                <p class="title">
                    Ville de Départ : {{travel.start_city}}
                </p>
                <p class="subtitle">
                    Address de départ : {{travel.start_address}}
                </p>
                <p class="subtitle">
                    Heure de départ : {{travel.start_hour}}
                </p>
            </div>
            <div class="card-content">
                <h2> Arrivée :  </h2>
                <p class="title">
                    Ville d'arrivée : {{travel.finish_city}}
                </p>
                <p class="subtitle">
                    Address d'arrivée : {{travel.finish_address}}
                </p>
                <p class="subtitle">
                    Heure d'arrivée : {{travel.finish_hour}}
                </p>
            </div>
            <div class="card-footer">
                <p class="card-footer-item">
                    <span>
                        Places disponibles: {{travel.available_seats}}
                    </span>
                </p>
                <p class="card-footer-item">
                    <span>
                        préférences : {{travel.preferences}}
                    </span>
                </p>
            </div>

        </div>

        <div class="reservation">
            <h2> Réservation </h2>
            <div class="reservation-content" v-if="travel.available_seats > 0">
                il reste {{travel.available_seats}} places disponibles, combien voulez-vous en réserver ?
                <select v-model="selected">
                    <option v-for="index in parseInt(travel.available_seats)" selected="0">
                        {{ index }}
                    </option>
                </select>
                <p>
                    à payer : {{ selected * 5 }} $
                </p>

                <div class="control">
                    <button class="button is-link" @click="makeReservation(selected)">Réserver et Payer</button>
                </div>

            </div>
            <div class="no-reservation" v-else>
                Il ne reste plus de place dans ce trajet
            </div>
        </div>
    </div>
</template>

<script>
    import Navbar from './add-ons/Navbar'
    export default {
        name: "detail",
        props: ['travelId'],

    data() {
        return {
            travel: [],
            selected: ""
        }
    },
    components: {Navbar},
    created() {
        this.getTravel();
    },
    methods: {
        getTravel() {
            axios.get("/api/travel/"+this.travelId).then(response => {
                this.travel = response.data;
            });
        },
        makeReservation(seatsNumbers) {
            axios.patch("api/travel/"+this.travelId, {
                available_seats: parseInt(this.travel.available_seats)-seatsNumbers
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


<style scoped>

    .card {
        margin-bottom: 1.5rem;
        margin-left:1.5rem;
        margin-right:1.5rem;
        border-radius: 20px;
    }

    .reservation {
        margin-left: 1.5rem;
        border-radius: 20px;
    }

</style>
