@extends('layouts.app')

@section('main-content')
     <!-- ***** Welcome Area Start ***** -->
     <section id="home" class="section welcome-area d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-md-7 col-lg-6">
                    <div class="welcome-intro">
                        <h1>EPS</h1>
                        <h3 class="fw-3 mt-2 mt-sm-3">Easy Payment System</h3>
                        <p class="my-3">Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). EPS eases the transaction providing services including fund transfer, merchant payment, bill payment, balance enquiry, mobile top-up, etc.</p>
                        <div class="button-group">
                            <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-bordered"><span>Download</span></a>
                            <a href="" data-toggle="modal" data-target="#modal-default"  class="btn btn-bordered d-none d-sm-inline-block">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6">
                    <!-- Welcome Thumb -->
                    <div class="welcome-thumb text-center" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                        <img src="{{ asset('assets/img/welcome/welcome-mockup-2.png') }}" alt="">
                    </div>
                    <!-- Video Icon -->
                    <div class="video-icon d-none d-lg-block">
                        <a class="play-btn" data-fancybox href="https://www.youtube.com/watch?v=SSJrsPlNFp8">
                            <i class="icofont-ui-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Benifits Area Start ***** -->
    <section id="benifits" class="section benifits-area ptb_100">
        <div class="container">
            <div class="row">
                <!-- Benifits Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up">
                    <div class="benifits-item text-center p-3">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/img/icon/1.png') }}" alt="">
                        </div>
                        <!-- Benifits Text -->
                        <div class="benifits-text">
                            <h3 class="mb-2">Best Experience</h3>
                            <p>Advanced features like real time usage update and charge-free bill payment guarantee the best possible app experience</p>
                        </div>
                    </div>
                </div>
                <!-- Benifits Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="benifits-item text-center p-3">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/img/icon/2.png') }}" alt="">
                        </div>
                        <!-- Benifits Text -->
                        <div class="benifits-text">
                            <h3 class="mb-2">Easy to use</h3>
                            <p>Our app is designed to give you a great experience. Features like personalized wallet, adding cashout charges makes our app easy and convenient to use & designed only for you</p>
                        </div>
                    </div>
                </div>
                <!-- Benifits Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="benifits-item text-center p-3">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/img/icon/3.png') }}" alt="">
                        </div>
                        <!-- Benifits Text -->
                        <div class="benifits-text">
                            <h3 class="mb-2">24/7 Support</h3>
                            <p>24/7 support services are here to ensure our customers' success and business productivity – whether for on-site assistance, technical, or remote support.</p>
                        </div>
                    </div>
                </div>
                <!-- Benifits Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="benifits-item text-center p-3">
                        <div class="feature-icon">
                            <img src="{{ asset('assets/img/icon/4.png') }}" alt="">
                        </div>
                        <!-- Benifits Text -->
                        <div class="benifits-text">
                            <h3 class="mb-2">Complete Security</h3>
                            <p>Full-proof security is ensured through features like blockchain technology and device authentication</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Benifits Area End ***** -->

    <!-- ***** About App Area Start ***** -->
    <section class="section about-app-area ptb_100">
        <div class="shapes-container">
            <div class="shape-1"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- About Text -->
                    <div class="about-text">
                        <!-- Headings -->
                        <div class="headings d-flex align-items-center mb-4">
                            <span class="text-uppercase d-none d-sm-block">About</span>
                            <h2 class="text-capitalize">{{ $about->title }}</h2>
                        </div>
                        <p class="my-3">{!! $about->description !!}</p>
                        <!-- Store Buttons -->
                        <div class="button-group store-buttons">
                            <a href="" data-toggle="modal" data-target="#modal-default"  class="btn btn-bordered">
                                <i class="icofont icofont-brand-android-robot dsp-tc"></i>
                                <p class="dsp-tc">GET IT ON
                                    <br> <span>Google Play</span></p>
                            </a>
                            <a href="" data-toggle="modal" data-target="#modal-default"  class="btn btn-bordered">
                                <i class="icofont icofont-brand-apple dsp-tc"></i>
                                <p class="dsp-tc">AVAILABLE ON
                                    <br> <span>Apple Store</span></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- About Thumb -->
                    <div class="about-thumb text-center d-none d-lg-block">
                        <img src="{{ 'images/'.$about->image }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About App Area End ***** -->

    <!-- ***** Work Area Start ***** -->
    <section class="section work-area ptb_100">
        <!-- Work Slider Wrapper -->
        <div class="work-wrapper d-none d-md-block">
            <div class="work-slider-wrapper" data-aos="zoom-in">
                <!-- Work Slider -->
                <ul class="work-slider owl-carousel">
                    <li class="slide-item">
                        <img src="{{ asset('assets/img/screenshots/1.png') }}" alt="">
                    </li>
                    <li class="slide-item">
                        <img src="{{ asset('assets/img/screenshots/2.png') }}" alt="">
                    </li>
                    <li class="slide-item">
                        <img src="{{ asset('assets/img/screenshots/3.png') }}" alt="">
                    </li>
                    <li class="slide-item">
                        <img src="{{ asset('assets/img/screenshots/4.png') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center d-md-none">
                <!-- Section Heading -->
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Few steps to Setup</h2>
                        <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                    </div>
                </div>
            </div>
            <!-- Work Content -->
            <div class="row justify-content-end justify-content-lg-between work-content" id="work-slider-pager">
                <div class="col-12 col-sm-6">
                    <a href="#" class="pager-item active">
                        <!-- Single Work -->
                        <div class="single-work d-inline-block text-center p-4">
                            <h3 class="mb-2">Balance Transfer</h3>
                            <p>
                                @if (strlen($balanacTransfer->description) > 125)
                                    {{ Str::limit($balanacTransfer->description, 125, '') }}
                                    <span id="dots">...</span>
                                @endif
                            </p>
                            <a href="{{ route('balance.transfer') }}" class="blog-btn mt-3">Read More</a>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="#" class="pager-item">
                        <!-- Single Work -->
                        <div class="single-work d-inline-block text-center p-4">
                            <h3 class="mb-2">Bill and Fee Payment</h3>
                            <p>
                                @if (strlen($bill->description) > 125)
                                    {{ Str::limit($bill->description, 125, '') }}
                                    <span id="dots">...</span>
                                @endif
                            </p>
                            <a href="{{ route('bill.payment') }}" class="blog-btn mt-3">Read More</a>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="#" class="pager-item">
                        <!-- Single Work -->
                        <div class="single-work d-inline-block text-center p-4">
                            <h3 class="mb-2">Merchant Payment</h3>
                            <p>
                                @if (strlen($merchant->description) > 125)
                                    {{ Str::limit($merchant->description, 125, '') }}
                                    <span id="dots">...</span>
                                @endif
                            </p>
                            <a href="{{ route('merchant.payment') }}" class="blog-btn mt-3">Read More</a>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="#" class="pager-item">
                        <!-- Single Work -->
                        <div class="single-work d-inline-block text-center p-4">
                            <h3 class="mb-2">Corporate Services</h3>
                            <p>
                                @if (strlen($corporate->description) > 125)
                                    {{ Str::limit($corporate->description, 125, '') }}
                                    <span id="dots">...</span>
                                @endif
                            </p>
                            <a href="{{ route('corporate.service') }}" class="blog-btn mt-3">Read More</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Work Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <section id="features" class="section features-area ptb_100">
        <div class="shapes-container">
            <div class="shape bg-shape"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="features-text">
                        <!-- Headings -->
                        <div class="headings d-flex align-items-center mb-4">
                            <span class="text-uppercase d-none d-sm-block">Features</span>
                            <h2 class="text-capitalize">{{ $feature->title }}</h2>
                        </div>
                        <p class="my-3">{!! $feature->description !!}</p>
                        <!-- Counter List -->
                        <div class="counter-list">
                            <ul>
                                <li>
                                    <!-- Single Counter -->
                                    <div class="single-counter px-4 py-3 text-center">
                                        <!-- Counter Icon -->
                                        <div class="counter-icon">
                                            <i class="icofont-repair"></i>
                                        </div>
                                        <!-- Counter Text -->
                                        <div class="counter-text">
                                            <span class="counter d-inline-block mt-3 mb-2">{{ $feature->users }}</span>
                                            <h5>Users</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- Single Counter -->
                                    <div class="single-counter px-4 py-3 text-center">
                                        <!-- Counter Icon -->
                                        <div class="counter-icon">
                                            <i class="icofont-heart-alt"></i>
                                        </div>
                                        <!-- Counter Text -->
                                        <div class="counter-text">
                                            <span class="counter d-inline-block mt-3 mb-2">{{ $feature->accounts }}</span>
                                            <h5>Acounts</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- Single Counter -->
                                    <div class="single-counter px-4 py-3 text-center">
                                        <!-- Counter Icon -->
                                        <div class="counter-icon">
                                            <i class="icofont-beard"></i>
                                        </div>
                                        <!-- Counter Text -->
                                        <div class="counter-text">
                                            <span class="counter d-inline-block mt-3 mb-2">{{ $feature->developers }}</span>
                                            <h5>Developers</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- Single Counter -->
                                    <div class="single-counter px-4 py-3 text-center">
                                        <!-- Counter Icon -->
                                        <div class="counter-icon">
                                            <i class="icofont-safety"></i>
                                        </div>
                                        <!-- Counter Text -->
                                        <div class="counter-text">
                                            <span class="counter d-inline-block mt-3 mb-2">{{ $feature->download }}</span>
                                            <h5>Download</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                    <!-- Featured Items -->
                    <div class="featured-items">
                        <ul>
                            <li>
                                <!-- Single Features Item -->
                                <div class="single-features media p-3">
                                    <!-- Features Title -->
                                    <div class="features-title mr-3">
                                        <img src="{{ asset('assets/img/icon/icon-1.svg') }}" alt="">
                                    </div>
                                    <!-- Features Text -->
                                    <div class="features-text media-body">
                                        <h3>Simple &amp; Light</h3>
                                        <p>Using EPS App, the registered user will be able to pay bills and fees.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- Single Features Item -->
                                <div class="single-features media p-3">
                                    <!-- Features Title -->
                                    <div class="features-title mr-3">
                                        <img src="{{ asset('assets/img/icon/icon-2.svg') }}" alt="">
                                    </div>
                                    <!-- Features Text -->
                                    <div class="features-text media-body">
                                        <h3>Creative Design</h3>
                                        <p>Merchants selling goods or services online can also avail EPS</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- Single Features Item -->
                                <div class="single-features media p-3">
                                    <!-- Features Title -->
                                    <div class="features-title mr-3">
                                        <img src="{{ asset('assets/img/icon/icon-3.svg') }}" alt="">
                                    </div>
                                    <!-- Features Text -->
                                    <div class="features-text media-body">
                                        <h3>Retina Ready</h3>
                                        <p>EPS will provide one-stop solution for the corporate clients</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- Single Features Item -->
                                <div class="single-features media p-3">
                                    <!-- Features Title -->
                                    <div class="features-title mr-3">
                                        <img src="{{ asset('assets/img/icon/icon-4.svg') }}" alt="">
                                    </div>
                                    <!-- Features Text -->
                                    <div class="features-text media-body">
                                        <h3>Unlimited Features</h3>
                                        <p>Any offline merchant can use EPS to receive the payment</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Area End ***** -->

    <!-- ***** Screenshots Area Start ***** -->
    <section id="screenshots" class="section screenshots-area ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshot Slider Area -->
                    <div class="app-screenshots">
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="{{ asset('assets/img/screenshots/1.png') }}" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="{{ asset('assets/img/screenshots/1.png') }}" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="{{ asset('assets/img/screenshots/2.png') }}" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="{{ asset('assets/img/screenshots/2.png') }}" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="{{ asset('assets/img/screenshots/3.png') }}" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="{{ asset('assets/img/screenshots/3.png') }}" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="{{ asset('assets/img/screenshots/4.png') }}" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="{{ asset('assets/img/screenshots/4.png') }}" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                        <!-- Single Screenshot Item -->
                        <div class="single-screenshot">
                            <img src="{{ asset('assets/img/screenshots/5.png') }}" alt="">
                            <!-- Screenshots Overlay -->
                            <div class="screenshots-overlay">
                                <a href="{{ asset('assets/img/screenshots/5.png') }}" data-fancybox="images"><i class="icofont-image"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Screenshots Area End ***** -->

    <!-- ***** Price Plan Area Start ***** -->
    <!-- <section id="pricing" class="section price-plan-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6"> -->
                    <!-- Section Heading -->
                    <!-- <div class="section-heading text-center">
                        <h2 class="text-capitalize">Affordable Pricing Plans</h2>
                        <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="price-plan-wrapper">
                    <div class="single-price-plan">
                        <div class="price-header d-flex align-items-center justify-content-between my-4 px-3">
                            <h4 class="plan-title text-uppercase">
                                Starter
                            </h4>
                            <div class="plan-cost">
                                <span class="plan-price">$19</span>
                                <span class="plan-type text-uppercase">/month</span>
                            </div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li><i class="icofont-check"></i>5GB Linux Web Space</li>
                            <li><i class="icofont-check"></i>5 MySQL Databases</li>
                            <li><i class="icofont-check"></i>Unlimited Email</li>
                            <li><i class="icofont-check"></i>250Gb mo Transfer</li>
                            <li><i class="icofont-close"></i>24/7 Tech Support</li>
                            <li><i class="icofont-close"></i>Daily Backups</li>
                        </ul>
                        <div class="plan-select">
                            <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                        </div>
                    </div>
                    <div class="single-price-plan">
                        <div class="price-header d-flex align-items-center justify-content-between my-4 px-3">
                            <h4 class="plan-title text-uppercase">
                                Basic
                            </h4>
                            <div class="plan-cost">
                                <span class="plan-price">$29</span>
                                <span class="plan-type text-uppercase">/month</span>
                            </div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li><i class="icofont-check"></i>10GB Linux Web Space</li>
                            <li><i class="icofont-check"></i>10 MySQL Databases</li>
                            <li><i class="icofont-check"></i>Unlimited Email</li>
                            <li><i class="icofont-check"></i>500Gb mo Transfer</li>
                            <li><i class="icofont-check"></i>24/7 Tech Support</li>
                            <li><i class="icofont-close"></i>Daily Backups</li>
                        </ul>
                        <div class="plan-select">
                            <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                        </div>
                    </div>
                    <div class="single-price-plan featured">
                        <div class="price-header d-flex align-items-center justify-content-between my-4 px-3">
                            <h4 class="plan-title text-uppercase">
                                Pro
                            </h4>
                            <div class="plan-cost">
                                <span class="plan-price">$49</span>
                                <span class="plan-type text-uppercase">/month</span>
                            </div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li><i class="icofont-check"></i>25GB Linux Web Space</li>
                            <li><i class="icofont-check"></i>25 MySQL Databases</li>
                            <li><i class="icofont-check"></i>Unlimited Email</li>
                            <li><i class="icofont-check"></i>2000Gb mo Transfer</li>
                            <li><i class="icofont-check"></i>24/7 Tech Support</li>
                            <li><i class="icofont-check"></i>Daily Backups</li>
                        </ul>
                        <div class="plan-select">
                            <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                        </div>
                    </div>
                    <div class="single-price-plan">
                        <div class="price-header d-flex align-items-center justify-content-between my-4 px-3">
                            <h4 class="plan-title text-uppercase">
                                Ultra
                            </h4>
                            <div class="plan-cost text-uppercase">
                                <span class="plan-price">$99</span>
                                <span class="plan-type">/month</span>
                            </div>
                        </div>
                        <ul class="plan-features pb-3">
                            <li><i class="icofont-check"></i>100GB Linux Web Space</li>
                            <li><i class="icofont-check"></i>Unlimited Databases</li>
                            <li><i class="icofont-check"></i>Unlimited Email</li>
                            <li><i class="icofont-check"></i>10000Gb mo Transfer</li>
                            <li><i class="icofont-check"></i>24/7 Tech Support</li>
                            <li><i class="icofont-check"></i>Daily Backups</li>
                        </ul>
                        <div class="plan-select">
                            <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Price Plan Area End ***** -->

    <!-- ***** Testimonial Area Start ***** -->
    <!--<section class="section testimonial-area ptb_100">
        <div class="shapes-container">
            <div class="shape bg-shape"></div>
        </div>
        <div class="container text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8">
                    <div class="testimonials owl-carousel">
                        <div class="single-testimonial p-3 p-md-5">
                            <img src="assets/img/avatar/avatar-1.png" class="mx-auto d-block" alt="">
                            <h3 class="client-name mt-4 mb-2">John Doe</h3>
                            <h5 class="client-address fw-4">Los Angeles, California</h5>
                            <div class="client-rating mt-2 mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="client-description">
                                <div class="client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem sunt nulla ducimus expedita, incidunt laborum assumenda. Deleniti iste placeat nostrum incidunt rem laudantium, sapiente, cum, molestias unde, quidem labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial p-3 p-md-5">
                            <img src="assets/img/avatar/avatar-2.png" class="mx-auto d-block" alt="">
                            <h3 class="client-name mt-4 mb-2">Jassica William</h3>
                            <h5 class="client-address fw-4">Los Angeles, California</h5>
                            <div class="client-rating mt-2 mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="client-description">
                                <div class="client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem sunt nulla ducimus expedita, incidunt laborum assumenda. Deleniti iste placeat nostrum incidunt rem laudantium, sapiente, cum, molestias unde, quidem labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial p-3 p-md-5">
                            <img src="assets/img/avatar/avatar-3.png" class="mx-auto d-block" alt="">
                            <h3 class="client-name mt-4 mb-2">Johnson Smith</h3>
                            <h5 class="client-address fw-4">Los Angeles, California</h5>
                            <div class="client-rating mt-2 mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="client-description">
                                <div class="client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam rem sunt nulla ducimus expedita, incidunt laborum assumenda. Deleniti iste placeat nostrum incidunt rem laudantium, sapiente, cum, molestias unde, quidem labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-thumb d-none d-md-block">
                        <div class="thumb-prev">
                            <span>
                                <img src="assets/img/avatar/avatar-3.png" alt="">
                            </span>
                        </div>
                        <div class="thumb-next">
                            <span>
                                <img src="assets/img/avatar/avatar-2.png" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Testimonial Area End ***** -->

    <!-- ***** Team Area Start ***** -->
    <!--<section id="team" class="section team-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Meet our Team Experts</h2>
                        <p class="d-none d-sm-block mt-4">EPS is developed by Optimum Solution and Services Ltd. (OSSL), a global technology solution provider.</p>
                        <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-slider owl-carousel">
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-1.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">Jonayed Hasan</h3>
                            <h5 class="team-post mb-2">Co-Founder &amp; CEO</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-2.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">Jassica William</h3>
                            <h5 class="team-post mb-2">Web Developer</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-3.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">John Deo</h3>
                            <h5 class="team-post mb-2">ISO Developer</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-4.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">Johnson Smith</h3>
                            <h5 class="team-post mb-2">Android Developer</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-team text-center px-3 py-2 m-2">
                        <div class="team-photo mx-auto">
                            <img src="assets/img/avatar/avatar-5.png" alt="">
                        </div>
                        <div class="team-content mt-2 mb-1">
                            <h3 class="team-name mt-3 mb-2">Johnson Smith</h3>
                            <h5 class="team-post mb-2">Android Developer</h5>
                            <p class="team-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ex quibusdam aliquid dicta a explicabo.</p>
                            <div class="team-media mt-3">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Team Area End ***** -->

    <!-- ***** Start Free Area Start ***** -->
    <section class="start-free-area">
        <div class="container">
            <div class="col-12">
                <!-- Start Free Content -->
                <div class="start-free-content d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between shadow-lg" data-aos="fade-up">
                    <!-- Start Free Content -->
                    <div class="start-free-text">
                        <h2 class="mb-2">One-stop Merchant Payment solution</h2>
                        <span>Easy Payment System</span>
                    </div>
                    <!-- Start Free Button -->
                    <div class="start-free-btn mt-4 mt-lg-0">
                        <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-bordered"><span>Try EPS Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Start Free Area End ***** -->

    <!-- ***** Download Area Start ***** -->
    <section class="section download-area ptb_100">
        <!-- Shapes Container -->
        <div class="shapes-container d-none d-sm-block">
            <div class="shape-2"></div>
            <div class="shape-3"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- Download Text -->
                    <div class="download-text text-center">
                        <h2>Download EPS</h2>
                        <p class="my-3">Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). EPS eases the transaction providing services including fund transfer, merchant payment, bill payment, balance enquiry, mobile top-up, etc.</p>
                        <p class="d-none d-sm-block my-3">EPS strives to make digital transaction effortless by enabling mass people with an easy and instant payment system.</p>
                        <!-- Store Buttons -->
                        <div class="button-group store-buttons">
                            <a href="" data-toggle="modal" data-target="#modal-default"  class="btn btn-bordered">
                                <i class="icofont icofont-brand-android-robot dsp-tc"></i>
                                <p class="dsp-tc">GET IT ON
                                    <br> <span>Google Play</span></p>
                            </a>
                            <a href="" data-toggle="modal" data-target="#modal-default"  class="btn btn-bordered">
                                <i class="icofont icofont-brand-apple dsp-tc"></i>
                                <p class="dsp-tc">AVAILABLE ON
                                    <br> <span>Apple Store</span></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Download Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section id="blog" class="section blog-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Section Heading -->
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Financial News</h2>
                        <p class="d-none d-sm-block mt-4">Online payment gateways cannot accept money directly from a bank account if it is not connected with debit-credit card/internet banking.</p>
                        <p class="d-block d-sm-none mt-4">Current online banking system is highly dependent on NPSB by Bangladesh Bank (Not all the banks are connected yet)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog wow fadeIn res-margin" data-wow-duration="2s">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">EPS</a></li>
                                <li><a href="#">Nov 05, 2021</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Instant Fund transfer between bank to bank is Limited</a></h3>
                            <p>Under this service, an account holder in a bank/MFS/e-wallet can send money from his/her account to a receiver’s bank/MFS/e-wallet account using EPS.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog wow fadeIn res-margin" data-wow-duration="2s" data-wow-delay="0.2s">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="{{ asset('assets/img/blog/blog-2.jpg') }}" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">EPS</a></li>
                                <li><a href="#">Nov 01, 2021</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Balance transfer, bill payment, etc. could be more cost effective</a></h3>
                            <p>Bill and Fee Payment: Using EPS App, the registered user will be able to pay bills and fees.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="{{ asset('assets/img/blog/blog-3.jpg') }}" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">EPS</a></li>
                                <li><a href="#">Oct 25, 2021</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Current online banking system is highly dependent on NPSB</a></h3>
                            <p>EPS will provide one-stop solution for the corporate clients dealing with large number of transactions. Easy Wage Disbursement is one of such services to be availed from EPS.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!--====== Contact Area Start ======-->
    <section id="contact" class="contact-area bg-gray ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2 class="text-capitalize">Stay Tuned</h2>
                        <p class="d-none d-sm-block mt-4">EPS strives to make digital transaction effortless by enabling mass people with an easy and instant payment system.</p>
                        <p class="d-block d-sm-none mt-4">To accelerate the transformation to achieve a sustainable digital financial eco-system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Contact Box -->
                    <div class="contact-box text-center">
                        <!-- Contact Form -->
                        <form id="contact-form" action="{{ route('contact.sendmail') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" placeholder="Message" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-bordered mt-3 mt-sm-4" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                        {{-- <p class="form-message"></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Area End ======-->

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content" style="border-radius: 15px">
            <div class="modal-header" style="padding-bottom: 0px; padding-top: 5px;">
                <a class="navbar-brand" href="https://eps.com.bd/">
                    <img class="logo" src="{{ asset('assets/img/logo/logo.png') }}" style="max-height: 30px;" alt="">
                </a>
              <a type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-top: 25px;">
                <span aria-hidden="true">&times;</span>
              </a>
            </div>
            <div class="modal-body" style="padding-bottom: 20px">
                <div class="maintenance-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-12 col-md-6 order-2 order-md-1">
                                <!-- Maintenance Content -->
                                <div class="maintenance-content my-5 my-md-0">
                                    <p class="my-3">Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). EPS eases the transaction providing services including fund transfer, merchant payment, bill payment, balance enquiry, mobile top-up, etc.</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-10 col-md-6 order-1 order-md-2 mx-auto pt-4 pt-md-0">
                                <img src="{{ asset('images/coming2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection
