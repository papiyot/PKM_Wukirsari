<template>
            <div class="row">
                <div class="active-recent-blog-carusel">
                    <div v-for="objek in this.set">
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/b1.jpg" alt="">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <ul>
                                    <li>
                                        <a href="#">Travel</a>
                                    </li>
                                    <li>
                                        <a href="#">Life Style</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><h4 class="title">{{objek.objek_nama}}</h4></a>
                            <p>
                                {{objek.objek_letak_diskripsi}}
                            </p>
                            <h6 class="date">31st January,2018</h6>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
</template>

<script>
    export default {
        name: "PaketComponent",
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
