<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page"
             href="{{url('dashboard')}}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pelanggan-dashboard') ? 'active' : ''}}" 
            href="{{url('pelanggan-dashboard')}}">
              <span data-feather="users" class="align-text-bottom"></span>
              Pelanggan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('service-dashboard') ? 'active' : ''}}" 
            href="{{url('service-dashboard')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Service
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('order-dashboard') ? 'active' : ''}}"
             href="{{url('order-dashboard')}}">
              <span data-feather="edit-3" class="align-text-bottom"></span>
              Data Order
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('harga-dashboard') ? 'active' : ''}}"
             href="{{url('harga-dashboard')}}">
              <span data-feather="dollar-sign" class="align-text-bottom"></span>
              Harga
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('status-dashboard') ? 'active' : ''}}"
             href="{{url('status-dashboard')}}">
              <span data-feather="bar-chart" class="align-text-bottom"></span>
              Status Pengerjaan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('layanan-dashboard') ? 'active' : ''}}"
             href="{{url('layanan-dashboard')}}">
              <span data-feather="trello" class="align-text-bottom"></span>
              Fasilitas Laundry
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pembayaran-dashboard') ? 'active' : ''}}"
             href="{{url('pembayaran-dashboard')}}">
              <span data-feather="dollar-sign" class="align-text-bottom"></span>
              pembayaran
            </a>
          </li>
        </ul>

        
      </div>
    </nav>