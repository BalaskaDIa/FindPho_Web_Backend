<template>
    <div class="container">
        <input type="text" v-model="keywords">
        <div class="row justify-content-center" v-if="results.length > 0">
            <div class="col-md-8" v-for="result in results" :key="result.id">
                <div class="card">
                    <div class="card-header" style="text-align: center">{{ result.caption }}</div>
                    <div class="card-body">
                        <a :href="`/pho/${ result.id }`">
                            <img height="360px" :src="`../storage/${result.image}`" alt="There is some issue with the image. Please try to reload the website." />
                        </a>
                    </div>
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
