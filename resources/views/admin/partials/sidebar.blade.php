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
          <li class="nav-item">
            <a href="{{ route('balance.edit', 1) }}" class="nav-link {{ Route::is('balance.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p>
                Balance Transfer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('bill.edit', 1) }}" class="nav-link {{ Route::is('bill.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-money-check "></i>
              <p>
                Bill and Fee Payment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('merchant.edit', 1) }}" class="nav-link {{ Route::is('merchant.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-invoice-dollar "></i>
              <p>
                Merchant Payment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('enquiry.edit', 1) }}" class="nav-link {{ Route::is('enquiry.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-coins "></i>
              <p>
                Balance Enquiry
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('mobile.edit', 1) }}" class="nav-link {{ Route::is('mobile.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-mobile-alt "></i>
              <p>
                Mobile Top-up
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('corporate.edit', 1) }}" class="nav-link {{ Route::is('corporate.edit') ? 'active' : '' }}">
                <i class="nav-icon fab fa-acquisitions-incorporated"></i>
              <p>
                Corporate Services
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('enhancing.edit', 1) }}" class="nav-link {{ Route::is('enhancing.edit') ? 'active' : '' }}">
                <i class="nav-icon fas fa-piggy-bank"></i>
              <p>
                Enhancing Banking Services
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('merreg.edit', 1) }}" class="nav-link {{ Route::is('merreg.edit') ? 'active' : '' }}">
                <i class="nav-icon fas fa-address-book"></i>
              <p>
                Merchant Registration
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('userreg.edit', 1) }}" class="nav-link {{ Route::is('userreg.edit') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
              <p>
                User Registration
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('service.edit', 1) }}" class="nav-link {{ Route::is('service.edit') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
              <p>
                Service Details
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.faq.index') }}" class="nav-link {{ Route::is('admin.faq.index') || Route::is('admin.faq.create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-question"></i>
              <p>
                FAQ
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('privacy.edit', 1) }}" class="nav-link {{ Route::is('privacy.edit') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-secret"></i>
              <p>
                Privacy Policy
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('term.edit', 1) }}" class="nav-link {{ Route::is('term.edit') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-secret"></i>
              <p>
                Terms & Conditions
              </p>
            </a>
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
