@extends('layouts.app')

@push('page-css')
    <style>
        #more {display: none;}
        .btn.btn-primary {
            background: #007bff !important;
            border-radius: 5px;
            padding: 4px 15px !important;
            font-size: 11px !important;
        }
    </style>
@endpush

@section('main-content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                        <h3>Merchant Registration</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-uppercase" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Merchant Registration</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Maintenance Area Start ***** -->
    <section class="section faq-area bg-gray ptb_100">
        <div class="maintenance-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-md-6 order-2 order-md-1">
                        <!-- Maintenance Content -->
                        <div class="maintenance-content my-5 my-md-0">
                            <h2>{{ $merreg->title }}</h2>
                            <p>
                                {!! $merreg->description !!}
                                {{-- @if (strlen($merreg->description) > 200)
                                    <span id="dots">......</span>
                                    <span id="more">{!! substr($merreg->description, 200) !!}</span>
                                @endif
                                <button class="btn btn-sm btn-primary" onclick="descriptionExtend()" id="myBtn">Read more</button> --}}
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-10 col-md-6 order-1 order-md-2 mx-auto pt-4 pt-md-0">
                        <img src="{{ 'images/'.$merreg->image }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Maintenance Area End ***** -->
@endsection

@push('page-js')
<script>
function descriptionExtend() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
</script>
@endpush

