@extends('layouts.app')

@push('page-css')
    <style>
        #more {display: none;}
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
                        <h3>Balance Transfer</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-uppercase" href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Balance Transfer</li>
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
                            <h2>Server is under maintenance</h2>
                            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                            <a href="#" class="btn btn-primary" id="myBtn" onclick="myFunction()">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-10 col-md-6 order-1 order-md-2 mx-auto pt-4 pt-md-0">
                        <img src="assets/img/welcome/Untitled-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Maintenance Area End ***** -->
@endsection

@push('page-js')
<script>
    function myFunction() {
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

