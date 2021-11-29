@extends('layouts.app')


@section('main-content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                        <h3>Blog</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-uppercase" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
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
            <div class="row blog">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog res-margin">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">Anna Sword</a></li>
                                <li><a href="#">Feb 05, 2019</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Blog Title Here</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione obcaecati, animi vitae recusandae, praesentium quae.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog res-margin">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">Jassica William</a></li>
                                <li><a href="#">Feb 05, 2019</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Blog Title Here</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione obcaecati, animi vitae recusandae, praesentium quae.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">John Doe</a></li>
                                <li><a href="#">Mar 05, 2019</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Blog Title Here</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione obcaecati, animi vitae recusandae, praesentium quae.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog res-margin">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-4.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">Anna Sword</a></li>
                                <li><a href="#">Feb 05, 2019</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Blog Title Here</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione obcaecati, animi vitae recusandae, praesentium quae.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog res-margin">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-5.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">Jassica William</a></li>
                                <li><a href="#">Feb 05, 2019</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Blog Title Here</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione obcaecati, animi vitae recusandae, praesentium quae.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-6.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">John Doe</a></li>
                                <li><a href="#">Mar 05, 2019</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Blog Title Here</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione obcaecati, animi vitae recusandae, praesentium quae.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog res-margin">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">Anna Sword</a></li>
                                <li><a href="#">Feb 05, 2019</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Blog Title Here</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione obcaecati, animi vitae recusandae, praesentium quae.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog res-margin">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">Jassica William</a></li>
                                <li><a href="#">Feb 05, 2019</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Blog Title Here</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione obcaecati, animi vitae recusandae, praesentium quae.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content p-4">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">John Doe</a></li>
                                <li><a href="#">Mar 05, 2019</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="#">Blog Title Here</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione obcaecati, animi vitae recusandae, praesentium quae.</p>
                            <a href="#" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** FAQ Area End ***** -->
@endsection

