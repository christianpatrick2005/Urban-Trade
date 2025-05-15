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
        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            color: #fff !important;
            transform: translateY(-2px);
        }
        .profile-img {
            width: 32px;
            height: 32px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 8px;
        }

    </style>
  
    <!-- Top Bar -->
    <div class="top-bar py-2" style="background: #1a1a1a">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="text-white d-none d-md-block">
                <i class="fas fa-wallet me-2"></i>Saldo: Rp {{ number_format(Auth::user()->saldo, 2, ',', '.') }}
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
  
            <!-- Toggler Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
  
            <!-- Navigation Items -->
            <div class="collapse navbar-collapse mx-5" id="mainNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/market">Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/trading">Trading</a>
                    </li>
                </ul>
  
                <!-- Right Section -->
                <div class="d-flex align-items-center gap-3">
                    <!-- Bitcoin Price -->
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
                            <img src="{{ asset(Auth::user()->profile_photo ?? 'https://img.freepik.com/premium-vector/default-avatar-profile-icon-social-media-user-image-gray-avatar-icon-blank-profile-silhouette-vector-illustration_561158-3383.jpg') }}" 
                                alt="Profile Photo" 
                                class="profile-img">
                            <span class="ms-2">{{ Auth::user()->username }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="profile">
                                    <i class="fas fa-user me-2"></i>Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="editprofile">
                                    <i class="fas fa-cog me-2"></i>Edit Profile
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
        </div>
    </nav>
  </header>
  
  @vite(['resources/js/crypto.js'])