<!--====== Footer Area Start ======-->
<footer class="section footer-area footer-bg">
    <!-- Footer Top -->
    <div class="footer-top ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="{{ asset('assets/img/logo/logo-white.png') }}" alt="">
                        </a>
                        <p class="text-white-50 mt-2 mb-3">Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). EPS eases the transaction providing services including fund transfer, merchant payment, bill payment, balance enquiry, mobile top-up, etc.</p>
                        <!-- Social Icons -->
                        <div class="social-icons d-flex">
                            <a class="facebook" href="https://www.facebook.com/EPSpay" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <!--<a class="twitter" href="#">
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="google-plus" href="#">
                                <i class="fab fa-google-plus-g"></i>
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                            <a class="vine" href="#">
                                <i class="fab fa-vine"></i>
                                <i class="fab fa-vine"></i>
                            </a>-->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-white mb-2">Useful Links</h3>
                        <ul>
                            <li class="py-2"><a class="text-white-50" href="{{ route('about.index') }}">About Us</a></li>
                            <li class="py-2"><a class="text-white-50" href="{{ route('service.details.index') }}">Service Details</a></li>
                            <li class="py-2"><a class="text-white-50" href="{{ route('blog.index') }}">Blog</a></li>
                            <li class="py-2"><a class="text-white-50" href="{{ route('career.index') }}">Career</a></li>
                            <li class="py-2"><a class="text-white-50" href="{{ url('/#contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-white mb-2">Product Help</h3>
                        <ul>
                            <li class="py-2">
                                <a class="text-white-50" href="{{ route('faq') }}">FAQ</a>
                            </li>
                            <li class="py-2"><a class="text-white-50" href="{{ route('privacy.policy.index') }}">Privacy Policy</a></li>
                            <li class="py-2"><a class="text-white-50" href="{{ route('term.index') }}">Terms &amp; Conditions</a></li>
                            <li class="py-2"><a class="text-white-50" href="{{ route('site.index') }}">Site Map</a></li>
                            <li class="py-2"><a class="text-white-50" href="{{ route('cookie.index') }}">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-white mb-2">Download</h3>
                        <ul>
                            <li class="py-2"><a class="text-white-50" href="{{ route('ios.index') }}">For IOS</a></li>
                            <li class="py-2"><a class="text-white-50" href="{{ route('android.index') }}">For Android</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copyright Area -->
                    <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                        <!-- Copyright Left -->
                        <div class="copyright-left text-white-50">&copy; Copyrights 2021 EPS All rights reserved.</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->
