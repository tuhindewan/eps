<!-- ***** Header Start ***** -->
<header class="section header-area">
    <div id="appo-header" class="main-header-area">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <a class="navbar-brand" href="https://eps.com.bd/">
                    <img class="logo" src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appo-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Appo Menu -->
                <div class="collapse navbar-collapse" id="appo-menu">
                    <!-- Header Items -->
                    <ul class="navbar-nav header-items ml-auto">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="{{ url('/#home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#blog" id="navbarDropdown-2" role="button" data-toggle="dropdown">
                                Services
                            </a>
                            <div class="dropdown-menu mega-menu blog-menu px-3 py-md-3">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="single-menu">
                                            <li><a class="dropdown-item" href="{{ route('balance.transfer') }}">Balance Transfer</a></li>
                                            <li><a class="dropdown-item" href="{{ route('bill.payment') }}">Bill and Fee Payment</a></li>
                                            <li><a class="dropdown-item" href="{{ route('merchant.payment') }}">Merchant Payment</a></li>
                                            <li><a class="dropdown-item" href="{{ route('balance.enquiry') }}">Balance Enquiry</a></li>
                                            <li><a class="dropdown-item" href="{{ route('mobile.topup') }}">Mobile Top-up</a></li>
                                            <li><a class="dropdown-item" href="{{ route('corporate.service') }}">Corporate Services</a></li>
                                            <li><a class="dropdown-item" href="{{ route('enhancing.banking.service') }}">Enhancing Banking Services</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#blog" id="navbarDropdown-2" role="button" data-toggle="dropdown">
                                Registration
                            </a>
                            <div class="dropdown-menu mega-menu blog-menu px-3 py-md-3">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="single-menu">
                                            <li><a class="dropdown-item" href="{{ route('merchant.registration.index') }}">Merchant Registration</a></li>
                                            <li><a class="dropdown-item" href="{{ route('user.registration.index') }}">User Registration</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link scroll" href="{{ url('/#features') }}">Features</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#blog" id="navbarDropdown-2" role="button" data-toggle="dropdown">
                                App Support
                            </a>
                            <div class="dropdown-menu mega-menu blog-menu px-3 py-md-3">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="single-menu">
                                            <li><a class="dropdown-item" href="{{ route('ios.index') }}">For iOS</a></li>
                                            <li><a class="dropdown-item" href="{{ route('android.index') }}">For Android</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link scroll" href="{{ url('/#contact') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ***** Header End ***** -->
