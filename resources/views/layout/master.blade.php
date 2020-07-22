<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

  <title>@yield('title')</title>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav class="sidebar" id="sidebar">
      <div class="sidebar-header">
        <h3>Nama Toko</h3>
        <button type="button" id="sidebarCollapse" class="btn btn-info">
          <i class="fas fa-align-left"></i>
        </button>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="fas fa-home mr-3"></i>
            Home
          </a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <a href="#">Home 1</a>
            </li>
            <li>
              <a href="#">Home 2</a>
            </li>
            <li>
              <a href="#">Home 3</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-briefcase mr-3"></i>
            About
          </a>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="fas fa-copy mr-3"></i>
            Pages
          </a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>
      </ul>

    </nav>

    <!-- Page Content  -->
    <div class="content" id="content">
      <div class="container">
        @yield('container')
      </div>
    </div>
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
</body>

</html>