@extends('layouts.app')


@section('main-content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                        <h3>Frequently Asked Questions</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-uppercase" href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">FAQ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** FAQ Area Start ***** -->
    <section class="section faq-area bg-gray ptb_100">
        <div class="container">
            <div class="row">
                @foreach ($faqs as $faq)
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Faq -->
                    <div class="single-faq bg-white px-4 py-3">
                        <div class="media">

                            <div class="media-body align-self-center">
                                <h5>{{ $faq->question }}</h5>
                            </div>
                        </div>
                        <p class="mt-3">{{ $faq->answer }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** FAQ Area End ***** -->
@endsection

