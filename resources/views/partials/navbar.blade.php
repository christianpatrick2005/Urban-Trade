<!-- Main Navigation -->
<header class="fixed-top shadow">
  <style>
      .btc-box {
          border: 1px solid #3d3d3d;
          border-radius: 50px;
          padding: 0.4rem 1rem;
          transition: all 0.3s ease;
      }
      .btc-box:hover {
          background: #3d3d3d;
          cursor: pointer;
      }
      .navbar-brand img {
          transition: transform 0.3s ease;
      }
      .navbar-brand:hover img {
          transform: scale(1.05);
      }
  </style>

  <!-- Top Bar -->
  <div class="top-bar py-2" style="background: #1a1a1a">
      <div class="container d-flex justify-content-between align-items-center">
          <div class="text-white d-none d-md-block">
              <i class="fas fa-wallet me-2"></i>Saldo: Rp 10.000
          </div>
          
          <div class="d-flex align-items-center gap-3">
              <button class="btn btn-sm btn-outline-light">
                  <i class="fas fa-download me-2"></i>Download App
              </button>
          </div>
      </div>
  </div>

  <!-- Main Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background: #2c2c2c">
      <div class="container">
          <!-- Logo -->
          <a class="navbar-brand" href="#">
              <img src="{{ asset('images/logo dgn tulisan.png') }}" alt="Logo" height="40">
          </a>

          <!-- Bitcoin Price -->
          <div class="d-flex align-items-center gap-3 ms-auto">
              <div class="btc-box text-white d-flex align-items-center">
                  <img src="https://indodax.com/v2/logo/svg/color/btc.svg" alt="BTC" style="height: 24px">
                  <span class="ms-2">1 BTC = <span id="btc-price" class="fw-bold">Loading...</span></span>
              </div>

              <!-- User Dropdown -->
              <div class="dropdown">
                  <button class="btn btn-outline-light dropdown-toggle d-flex align-items-center" 
                          type="button" 
                          data-bs-toggle="dropdown"
                          aria-expanded="false">
                      <i class="fas fa-user-circle me-2"></i>
                      Username
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                          <a class="dropdown-item" href="#">
                              <i class="fas fa-user me-2"></i>Profil
                          </a>
                      </li>
                      <li>
                          <a class="dropdown-item" href="#">
                              <i class="fas fa-cog me-2"></i>Pengaturan
                          </a>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <a class="dropdown-item text-danger" href="#">
                              <i class="fas fa-sign-out-alt me-2"></i>Keluar
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
</header>

@vite(['resources/js/crypto.js'])