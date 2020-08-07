<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

  <title>@yield('title')</title>
</head>

<body>
  <!-- Sidebar  -->
  <nav class="sidebar-lg" id="sidebar">
    <div class="sidebar-header">
      <h3>Nama Toko</h3>
      <button type="button" id="sidebarCollapse" class="btn btn-info">
        <i class="fas fa-align-left"></i>
      </button>
    </div>

    <ul class="list-unstyled components">
      <li>
        <a href="/">
          <i class="fas fa-home"></i>
          Dashboard
        </a>
        <a href="/products">
          <i class="fas fa-box"></i>
          Produk
        </a>
        <a href="/categories">
          <i class="fas fa-tags"></i>
          Kategori
        </a>
        <a href="/sizecharts">
          <i class="fas fa-list-ol"></i>
          Daftar Ukuran
        </a>
        <a href="/customers">
          <i class="fas fa-user-friends"></i>
          Pelanggan
        </a>
        <a href="/sales">
          <i class="fas fa-cash-register"></i>
          Penjualan
        </a>
        <a href="/purchases">
          <i class="fas fa-shopping-cart"></i>
          Pembelian
        </a>
        <a href="/discounts">
          <i class="fas fa-percent"></i>
          Diskon
        </a>
        <a href="/logout">
          <i class="fas fa-power-off"></i>
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">WebName</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="/">
            <i class="fas fa-home"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a href="/products">
            <i class="fas fa-box"></i>
            Produk
          </a>
        </li>
        <li class="nav-item">
          <a href="/categories">
            <i class="fas fa-tags"></i>
            Kategori
          </a>
        </li>
        <li class="nav-item">
          <a href="/sizecharts">
            <i class="fas fa-list-ol"></i>
            Daftar Ukuran
          </a>
        </li>
        <li class="nav-item">
          <a href="/customers">
            <i class="fas fa-user-friends"></i>
            Pelanggan
          </a>
        </li>
        <li class="nav-item">
          <a href="/sales">
            <i class="fas fa-cash-register"></i>
            Penjualan
          </a>
        </li>
        <li class="nav-item">
          <a href="/purchases">
            <i class="fas fa-shopping-cart"></i>
            Pembelian
          </a>
        </li>
        <li class="nav-item">
          <a href="/discounts">
            <i class="fas fa-percent"></i>
            Diskon
          </a>
        </li>
        <li class="nav-item">
          <a href="/logout">
            <i class="fas fa-power-off"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content">
    @yield('container')
  </div>

  {{-- <div class="row no-gutters">
      <div class="col-md-2 bg-light pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="navbar-brand" href="#">Admin | <b>NAMA TOKO</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/dashboard"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="dropdown-btn nav-link" href="/product"><i class="fas fa-cubes mr-2"></i>Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart mr-2"></i>Pemesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-money-check-alt mr-2"></i>Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-file-invoice mr-2"></i>Arsip</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
          </li>
        </ul>
      </div>
      @yield('container')
    </div> --}}




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
  @yield('footer')
</body>

</html>