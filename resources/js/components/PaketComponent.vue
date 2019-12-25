<template>
            <div class="row">
                <div class="active-recent-blog-carusel">
                        <div  v-for="vpaket in this.paket">
                            <div class="single-price">
                                <h4>{{vpaket.paket_nama}}</h4>
                                <ul class="price-list" v-for="pd in filterKat(vpaket.paket_id)" :key="pd.paket_detail_id">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>{{pd.objek_nama}}</span>
                                        <a href="#" class="price-btn">Rp. {{pd.paket_detail_biaya}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
</template>

<script>
    export default {
        name: "PaketComponent",
        props:['paket','paket_detail'],
        data: function(){
            return{
                apa:"",

            };
        },
        created() {
            console.log('ini data set', this.paket);
        },
        methods: {
            filterKat(a) {
                const res = this.paket_detail;
                if (a) {
                    return res.filter(m => m.paket_detail_paket_id === a)
                }
                return res
            },
        }
    }
</script>

<style scoped>

</style>
