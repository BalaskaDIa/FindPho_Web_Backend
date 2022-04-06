<template>
    <div class="container">
        <input placeholder="Search here..." type="text" v-model="keywords">
        <div class="row justify-content-center" v-if="results.length > 0">
            <div class="col-md-4 pt-3 pic" v-for="result in results" :key="result.id">
                <div class="card-body " style=" background-color: #235892;">
                    <a :href="`/pho/${ result.id }`">
                        <img class="card-img" height="170px" :src="`../storage/${result.image}`" alt="There is some issue with the image. Please try to reload the website." />
                    </a>
                    <div class="middle">
                        <a :href="`/pho/${result.id}`"><div class="text">{{result.title}}</div></a>
                    </div>
                </div>
        </div>
        </div>


        <div class="row justify-content-center" v-else>
            <div class="pt-5">
            <div class="row justify-content-center">Don't you find a photo that you wanna see?</div>
            <div class="row justify-content-center">Don't hesitate to shoot your own photos!</div>
                <a :href="`/pho/create`">
                <img class="card-img"  :src="getLogo('findpho.jpg')" />
                </a>
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
            if (after.length === 0){
                this.results = [];
            }
            else
            {
                this.fetch();

            }
        }
    },
    methods: {
        fetch() {
            axios.get('/search', { params: { keywords: this.keywords } })
                .then(response => this.results = response.data)
                .catch(error => {});
        },
        getLogo(logo){
            return '../svg/'+logo;
        }
    }
}
</script>
