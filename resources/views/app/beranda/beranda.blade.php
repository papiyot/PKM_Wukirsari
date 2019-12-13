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

<!-- Start popular-destination Area -->
<section class="popular-destination-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Destinations</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/d1.jpg" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$150</a>
                        <h4>Mountain River</h4>
                        <p>Paraguay</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/d2.jpg" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$250</a>
                        <h4>Dream City</h4>
                        <p>Paris</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/d3.jpg" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$350</a>
                        <h4>Cloud Mountain</h4>
                        <p>Sri Lanka</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End popular-destination Area -->


<!-- Start price Area -->
<section class="price-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">We Provide Affordable Prices</h1>
                    <p>Well educated, intellectual people, especially scientists at all times demonstrate considerably.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Cheap Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex justify-content-between align-items-center">
                            <span>New York</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Maldives</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Sri Lanka</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Nepal</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Thiland</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Singapore</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Luxury Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex justify-content-between align-items-center">
                            <span>New York</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Maldives</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Sri Lanka</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Nepal</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Thiland</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Singapore</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Camping Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex justify-content-between align-items-center">
                            <span>New York</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Maldives</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Sri Lanka</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Nepal</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Thiland</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Singapore</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End price Area -->


<!-- Start other-issue Area -->
<section class="other-issue-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Other issues we can help you with</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is.</p>
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
                    <h1 class="mb-10">Testimonial from our Clients</h1>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
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
                    Did not find your Package? <br>
                    Feel free to ask us. <br>
                    We‘ll make it for you
                </h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
                </p>
                <a href="#" class="primary-btn text-uppercase">request custom price</a>
            </div>
            <div class="col-lg-6 col-md-12 home-about-right no-padding">
                <img class="img-fluid" src="img/about-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->


<!-- Start blog Area -->
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Latest from Our Blog</h1>
                    <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as has.</p>
                </div>
            </div>
        </div>
       <paket-component></paket-component>
    </div>
</section>
<!-- End recent-blog Area -->

@endsection

