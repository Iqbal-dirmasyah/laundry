<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Laundry Iqbal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="/pelanggan">Pelanggan</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/service">Service</a>
          </li>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="/order">Data Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/harga">Harga</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/status">Status Pengerjaan</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/fasilitas">Fasilitas</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/pembayaran">Metode Pembayaran</a>
          </li>
        </ul>
         <ul class="navbar-nav ms-auto mb-2 mb-md-0">
        @auth
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
             <button class="btn btn-dark">Logout</button>
          </form>
           
          </li>
        @else
       
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login">Login</a>
          </li>
        @endauth
        </ul>
      </div>
    </div>
  </nav>
</header>