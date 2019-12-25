<template>
    <div class="row">
        <div class="active-recent-blog-carusel">
            <div v-for="objek in this.set">
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img  :src="'galeri/objek/'+objek.objek_images" alt="" width="200" height="250">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">{{objek.desa_nama}}</a>
                                </li>
                                <li>
                                    <a href="#">{{objek.objek_nama}}</a>
                                </li>
                                <li>
                                    <a href="#">Rp. {{objek.objek_biaya}}</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">{{objek.objek_nama}}</h4></a>
                        <p>
                            {{objek.objek_letak_diskripsi}}
                        </p>
                        <h6 class="date">{{objek.objek_alamat}}</h6>
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
