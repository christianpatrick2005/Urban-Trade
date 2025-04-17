<!--Main Navigation-->
<header class="fixed-top">

    <!-- Jumbotron -->
    <div class="p-3 text-center" style="background-color: rgb(66, 63, 63)">
      <div class="container">
        <div class="row">

          {{-- logo --}}
          <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
            <a class="ms-md-2">
              <img src="{{ asset('images/logo dgn tulisan.png') }}" alt=""  height="50">
            </a>
          </div>
  
          <!-- money elements -->
          <div class="col-md-4 mt-2">
            {{-- <h1 style="color:white;">Rp {{ number_format(Auth::user()->saldo, 10, ',', '.') }}</h1> --}}
          </div>
          <!-- search elements -->
  
          <!-- Right elements -->
          <div class="col-md-4 d-flex justify-content-center justify-content-md-end align-items-center">
            <div class="d-flex">
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary justify-content-end" data-mdb-ripple-color="dark" type="button">
                {{-- Download app  {{Auth::user()->username}}<i class="fas fa-download ms-2"></i> --}}
              </button>
            </div>
          </div>
          <!-- Right elements -->

        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  
    <div class="row border-bottom g-0">
      <div class="col" style="background-color: #2c2c2c">
        @include('partials/offcanvas')
      </div>
      <div class="col-11">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color: #2c2c2c">
          
          <!-- Container wrapper -->
          <div class="container justify-content-end">
            <!-- Left links -->
            <div class="navbar-nav">
              <button class="navbar-toggler ml-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <div class="dropdown">
                  <a class="nav-link dropsown-toggle" role="button" data-bs-toggle="dropdown">
                    <span>Kategori</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item btn" type="button" href="">Arcade</a></li>
                    <li><a class="dropdown-item btn" type="button" href="">Loterry</a></li>
                    <li><a class="dropdown-item btn" type="button" href="">Sport Bet</a></li>
                    <li><a class="dropdown-item btn" type="button" href="">Game percobaan</a></li>
                  </ul>
                </div>
                <li class="nav-item">
                  <a class="nav-link" href="">Berita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Promo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Tarik tunai</a>
                </li>
              </ul>
                      
            </div>

          </div>
          <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
      </div>
    </div>

  </header>
  <!--Main Navigation-->