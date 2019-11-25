<template>
    <div class="search">
        <navbar></navbar>

        <div class="input-container">
            <input type="text" placeholder="Rechercher" v-model="travelSearchString" />
        </div>
        <div v-for="travel in filteredTravelFeed()" :key="travel.id" class="search-results">
            <div class="card">
                <div class="card-content">
                    <p class="title">
                    {{travel.start_city}} - {{travel.finish_city}}
                    </p>
                    <p class="subtitle">
                    {{travel.start_address}} - {{travel.finish_address}}
                    </p>
                    <router-link :to="{ name: 'detail', params: { travelId : travel.id } }">
                        See more
                    </router-link>
                </div>
                <footer class="card-footer">
                    <p class="card-footer-item">
                    <span>
                        Places disponibles: {{travel.available_seats}}
                    </span>
                    </p>
                    <p class="card-footer-item">
                    <span>
                        {{travel.preferences}}
                    </span>
                    </p>
                </footer>
                </div>
        </div>
    </div>
</template>

<script>
import Navbar from './add-ons/Navbar'
export default {
    name: "search",
    data() {
        return {
            travelSearchString: "",
            travels: []
        }
    },
    components: {Navbar},
    created() {
        this.getTravels();
    },
    methods: {
        getTravels() {
            axios.get("/api/travel").then(response => {
                this.travels = response.data;
            });
        },
        filteredTravelFeed: function () {

            let travelsFiltered = this.travels;
            let travelSearchString = this.travelSearchString;

            if(!travelSearchString){
                return travelsFiltered;
            }

            let searchString = travelSearchString.trim().toLowerCase();

            travelsFiltered = travelsFiltered.filter(function(item){
                if(item.start_city.toLowerCase().indexOf(searchString) !== -1 || item.finish_city.toLowerCase().indexOf(searchString) !== -1 ){
                    return item;
                }
            })

            return travelsFiltered;
        }
    }

}
</script>

<style lang="scss">
.search {
    .input-container {
        margin: 1.5rem auto;
        border-radius: 5px;
        background: DodgerBlue ;
        padding: 10px;
        width: 50%;
    }

    .input-container input {
        border: none;
        background: transparent;
        color: white;
        padding: 6px 15px;
        font-size: 18px;
    }

    .search-results {
        display: flex;
        flex-direction: column;
        width: 500px;
        justify-content: center;
        margin: auto;

        .card {
            margin-bottom: 1.5rem;
            border-radius: 20px;
        }
    }
}
</style>
