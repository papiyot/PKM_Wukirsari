<template>
    <div class="row">
        <div class="active-recent-blog-carusel">
            <div v-for="objek in this.set">
                    <div class="single-destination relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img :src="'galeri/objek/'+objek.objek_images" alt="" width="200" height="250">
                        </div>
                        <div class="desc">
                            <a href="#" class="price-btn">Rp. {{objek.objek_biaya}}</a>
                            <h4>{{objek.objek_nama}}</h4>
                            <p>{{objek.desa_nama}}</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ObjekComponent",
        props:['set'],
        data: function(){
            return{
                paket:"",

            };
        },
        created() {
            console.log('ini data set', this.set);
        }
    }
</script>

<style scoped>

</style>
