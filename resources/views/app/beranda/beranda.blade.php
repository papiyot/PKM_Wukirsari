@extends('layouts.web')

@section('content')

<!-- start banner Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 banner-left">
                <h6 class="text-white">Away from monotonous life</h6>
                <h1 class="text-white">Wukirsari Travel</h1>
                <p class="text-white">
                    If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.
                </p>
                <a href="#" class="primary-btn text-uppercase">Get Started</a>
            </div>
            <div class="col-lg-4 col-md-6 banner-right" style="margin-top:10%;">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Rencana</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                        <form class="form-wrap">
                            <input type="text" class="form-control date-picker" name="tglKunjungan" placeholder="Tanggal Kunjungan " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Kunjungan '">
                            <input type="number" min="1" max="20" class="form-control" name="jmlPeserta" placeholder="Jumlah Peserta " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jumlah Peserta '">
                            <input type="number" min="1000" max="999990" class="form-control" name="biaya" placeholder="Biaya " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Biaya '">
                            <a href="#" class="primary-btn text-uppercase">Cari Paket</a>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                        <form class="form-wrap">
                            <input type="text" class="form-control date-picker" name="tglKunjungan" placeholder="Tanggal Kunjungan " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Kunjungan '">
                            <input type="number" min="1" max="20" class="form-control" name="jmlPeserta" placeholder="Jumlah Peserta " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jumlah Peserta '">
                            <input type="number" min="1000" max="999990" class="form-control" name="biaya" placeholder="Biaya " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Biaya '">
                            <a href="#" class="primary-btn text-uppercase">Cari Rencana</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start blog Area -->
<section class="popular-destination-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Daftar Objek Wisata</h1>
                    <p>Temukan Objek yang anda sukai.</p>
                </div>
            </div>
        </div>
        <objek-component :set="{{ $data->objek->original->data }}" ></objek-component>
    </div>
</section>
<!-- End recent-blog Area -->
<!-- Start blog Area -->
<section class="price-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Daftar Paket Wisata</h1>
                    <p>Temukan paket yang anda sukai.</p>
                </div>
            </div>
        </div>
        <paket-component :paket="{{ $data->paket->original->data }}" :paket_detail="{{ $data->paket_detail->original->data }}"></paket-component>
    </div>
</section>
<!-- End recent-blog Area -->

<!-- Start other-issue Area -->
<section class="other-issue-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Layanan yang anda inginkan</h1>
{{--                    <p>We all live in an age that belongs to the young at heart. Life that is.</p>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o1.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Rent a Car</h4>
                    </a>
                    <p>
                        The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o2.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Cruise Booking</h4>
                    </a>
                    <p>
                        I was always somebody who felt quite sorry for myself, what I had not got compared.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o3.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>To Do List</h4>
                    </a>
                    <p>
                        The following article covers a topic that has recently moved to center stage–at least it seems.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o4.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Food Features</h4>
                    </a>
                    <p>
                        There are many kinds of narratives and organizing principles. Science is driven by evidence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End other-issue Area -->


<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Respon Pengunjung</h1>
                    <p>Senyuman anda adalah tujuan kami </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial">
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/elements/user1.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/elements/user2.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/elements/user1.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/elements/user2.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/elements/user1.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/elements/user2.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area -->

<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6 col-md-12 home-about-left">
                <h1>
                    Tidak menemukan Paket Anda? <br>
                    Silakan bertanya kepada kami. <br>
                    Kami akan membuatnya untuk Anda
                </h1>

                <a href="#" class="primary-btn text-uppercase">request custom price</a>
            </div>
            <div class="col-lg-6 col-md-12 home-about-right no-padding">
                <img class="img-fluid" src="img/about-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->




@endsection

