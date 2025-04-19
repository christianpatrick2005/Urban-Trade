<!--Main Navigation-->
<style>
      .btc-box {
      border: 1px solid #ddd;
      border-radius: 2rem;
      padding: 0.25rem 0.75rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .btc-icon {
      background-color: orange;
      color: white;
      border-radius: 50%;
      padding: 0.3rem;
    }

    .navbar-end {
      margin-left: auto;
      display: flex;
      align-items: center;
      gap: 1rem;
    }
</style>
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
            <p1 class="" style="color: white"> Rp 10.000</p1>
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
        <nav class="navbar text-light px-3" style="background-color: #2c2c2c">
          <div class="container-fluid">
            <div class="navbar-end">
              <div class="btc-box">
                <img src="https://indodax.com/v2/logo/svg/color/btc.svg" alt="">
                <span>1 BTC = Rp 1.439.012.000</span>
              </div>
                
              <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                  Menu
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Profil</a></li>
                  <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Keluar</a></li>
                </ul>
              </div>

            </div>
          </div>
        </nav>
        <!-- Navbar -->
      </div>
    </div>

  </header>
  <!--Main Navigation-->