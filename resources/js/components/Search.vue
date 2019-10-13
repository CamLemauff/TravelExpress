<template>
    <div class="search">
        <navbar></navbar>
        Search
        <div v-for="travel in travels" :key="travel.id" class="search-results">
            <div class="card">
                <div class="card-content">
                    <p class="title">
                    {{travel.start_city}} - {{travel.finish_city}}
                    </p>
                    <p class="subtitle">
                    {{travel.start_address}} - {{travel.finish_address}}
                    </p>
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
        }
    }
    
}
</script>

<style lang="scss">
.search {
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