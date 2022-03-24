<template>
    <div class="container">
        <input placeholder="Type here" type="text" v-model="keywords">
        <div class="row justify-content-center" v-if="results.length > 0">
            <div class="col-md-4 row pt-2" v-for="result in results" :key="result.id">
                    <div class="card-header" style=" background-color: #183B62; text-align: center;">{{ result.caption }}</div>
                    <div class="card-body " style=" background-color: #235892;">
                        <a :href="`/pho/${ result.id }`">
                            <img class="card-img" height="170px" :src="`../storage/${result.image}`" alt="There is some issue with the image. Please try to reload the website." />
                        </a>
                    </div>
        </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            keywords: null,
            results: []
        };
    },
    watch: {
        keywords(after, before) {
            this.fetch();
        }
    },
    methods: {
        fetch() {
            axios.get('/search', { params: { keywords: this.keywords } })
                .then(response => this.results = response.data)
                .catch(error => {});
        }
    }
}
</script>
