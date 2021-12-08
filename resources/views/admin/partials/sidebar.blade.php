<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('assets/img/logo/logo.png') }}" alt="EPS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">EPS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt text-blue"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('balance.edit') ||
                                    Route::is('bill.edit') ||
                                    Route::is('merchant.edit') ||
                                    Route::is('enquiry.edit') ||
                                    Route::is('mobile.edit') ||
                                    Route::is('corporate.edit') ||
                                    Route::is('enhancing.edit')   ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tty text-green"></i>
                    <p>
                        Services
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item {{ Route::is('balance.edit') ? 'active' : '' }}">
                        <a href="{{ route('balance.edit', 1) }}" class="nav-link">
                        <i class="nav-icon fas fa-hand-holding-usd"></i>
                        <p>
                            Balance Transfer
                        </p>
                        </a>
                    </li>
                    <li class="nav-item  {{ Route::is('bill.edit') ? 'active' : '' }}">
                        <a href="{{ route('bill.edit', 1) }}" class="nav-link">
                        <i class="nav-icon fas fa-money-check "></i>
                        <p>
                            Bill and Fee Payment
                        </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('merchant.edit') ? 'active' : '' }}">
                        <a href="{{ route('merchant.edit', 1) }}" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar "></i>
                        <p>
                            Merchant Payment
                        </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('enquiry.edit') ? 'active' : '' }}">
                        <a href="{{ route('enquiry.edit', 1) }}" class="nav-link">
                        <i class="nav-icon fas fa-coins "></i>
                        <p>
                            Balance Enquiry
                        </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('mobile.edit') ? 'active' : '' }}">
                        <a href="{{ route('mobile.edit', 1) }}" class="nav-link">
                        <i class="nav-icon fas fa-mobile-alt "></i>
                        <p>
                            Mobile Top-up
                        </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('corporate.edit') ? 'active' : '' }}">
                        <a href="{{ route('corporate.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fab fa-acquisitions-incorporated"></i>
                        <p>
                            Corporate Services
                        </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('enhancing.edit') ? 'active' : '' }}">
                        <a href="{{ route('enhancing.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-piggy-bank"></i>
                        <p>
                            Enhancing Banking Services
                        </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::is('merreg.edit') ||
                                Route::is('userreg.edit')   ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-registered text-purple"></i>
                    <p>
                        Registration
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item {{ Route::is('merreg.edit') ? 'active' : '' }}">
                        <a href="{{ route('merreg.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Merchant Registration
                        </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('userreg.edit') ? 'active' : '' }}">
                    <a href="{{ route('userreg.edit', 1) }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                        User Registration
                        </p>
                    </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('about.edit') ||
                                Route::is('service.edit') ||
                                Route::is('career.edit') ||
                                Route::is('feature.edit') ||
                                Route::is('admin.advantage.index')   ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-link text-orange"></i>
                    <p>
                        Useful Links
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item {{ Route::is('about.edit') ? 'active' : '' }}">
                        <a href="{{ route('about.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>
                          <p>
                            About Us
                          </p>
                        </a>
                      </li>
                      <li class="nav-item {{ Route::is('service.edit') ? 'active' : '' }}">
                        <a href="{{ route('service.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                          <p>
                            Service Details
                          </p>
                        </a>
                      </li>
                    <li class="nav-item {{ Route::is('career.edit') ? 'active' : '' }}">
                        <a href="{{ route('career.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-user-md"></i>
                            <p>
                            Career
                            </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('feature.edit') ? 'active' : '' }}">
                        <a href="{{ route('feature.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fab fa-accusoft"></i>
                            <p>
                            Features
                            </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('admin.advantage.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.advantage.index') }}" class="nav-link">
                            <i class="nav-icon fab fa-adversal"></i>
                            <p>
                            Advantages
                            </p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('admin.faq.index') ||
                                Route::is('admin.faq.create') ||
                                Route::is('privacy.edit') ||
                                Route::is('term.edit') ||
                                Route::is('cookie.edit') ||
                                Route::is('site.edit')   ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fab fa-product-hunt text-yellow"></i>
                    <p>
                        Product Help
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item  {{ Route::is('admin.faq.index') || Route::is('admin.faq.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.faq.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-question"></i>
                          <p>
                            FAQ
                          </p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('privacy.edit') ? 'active' : '' }}">
                        <a href="{{ route('privacy.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-user-secret"></i>
                          <p>
                            Privacy Policy
                          </p>
                        </a>
                      </li>

                      <li class="nav-item {{ Route::is('term.edit') ? 'active' : '' }}">
                        <a href="{{ route('term.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-user-secret"></i>
                          <p>
                            Terms & Conditions
                          </p>
                        </a>
                      </li>

                      <li class="nav-item {{ Route::is('cookie.edit') ? 'active' : '' }}">
                        <a href="{{ route('cookie.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-user-secret"></i>
                          <p>
                            Cookie Policy
                          </p>
                        </a>
                      </li>
                      <li class="nav-item {{ Route::is('site.edit') ? 'active' : '' }}">
                        <a href="{{ route('site.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>
                          <p>
                            Site Map
                          </p>
                        </a>
                      </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('ios.edit') ||
                                Route::is('android.edit')   ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tablet-alt text-cyan"></i>
                    <p>
                        App Support
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item {{ Route::is('ios.edit') ? 'active' : '' }}">
                        <a href="{{ route('ios.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fab fa-apple"></i>
                          <p>
                            IOS App Support
                          </p>
                        </a>
                      </li>

                      <li class="nav-item {{ Route::is('android.edit') ? 'active' : '' }}">
                        <a href="{{ route('android.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fab fa-android"></i>
                          <p>
                            Android App Support
                          </p>
                        </a>
                      </li>
                </ul>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off text-red"></i>

                <p>Logout</p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
