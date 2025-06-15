<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Slot</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    @vite(['resources/js/crypto.js'])

  <style>
    aside {
      position: fixed;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
    }

    #my-chart {
      width: 100%;
      max-width: 200px;
      margin: 0 auto;
    }


    .word-slide {
      font-weight: bold;
      position: relative;
      overflow: hidden;
      height: 44px;
      width: 300px;
      text-align: center;
    }

    .word {
      position: absolute;
      opacity: 0;
      animation: slide 8s infinite;
    }

    .word:nth-child(2) { animation-delay: 2s; }
    .word:nth-child(3) { animation-delay: 4s; }
    .word:nth-child(4) { animation-delay: 6s; }

    @keyframes slide {
      0% { opacity: 0; transform: translateY(100%); }
      10% { opacity: 1; transform: translateY(0); }
      25% { opacity: 1; transform: translateY(0); }
      35% { opacity: 0; transform: translateY(-100%); }
      100% { opacity: 0; transform: translateY(-100%); }
    }

    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }
    .hover-scale:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 255, 0, 0.1);
    }
    .hover-grow {
        transition: all 0.3s ease;
    }
    .hover-grow:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(0, 255, 0, 0.3);
    }
    .bg-dark-transparent {
        background: rgba(44, 44, 44, 0.9);
        backdrop-filter: blur(10px);
    }
    .img-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all 0.3s ease;
    }
    .card:hover .img-overlay {
        opacity: 0;
    }

  </style>
</head>
<body class="" style="background-color: #1e1e1e; padding-top: 130px">
  {{-- infinite slider --}}
  {{-- @include('partials/infiniteSlider') --}}
  
    {{-- NAVBAR --}}
    @include('partials/navbar')

    <div class="container text-white" style="margin-top: 100px">
      <h1 class="" style="font-size: 80px">
        Platform Trading<br>
        Aset Kripto <span class="highlight" style="color: rgb(61, 227, 61)">Terpercaya</span>
      </h1>
      <p class="tagline fs-1">Investasi mudah dan aman untuk <strong>#AsetMasaDepan</strong></p>
  
      <h2 class=" fs-1">
        Investasi Trading 
        untuk
        <span class="word-slide text-light d-inline-block">
          <div class="word" style="color: rgb(61, 227, 61)">Pensiunan</div>
          <div class="word" style="color: rgb(61, 227, 61)">Mahasiswa</div>
          <div class="word" style="color: rgb(61, 227, 61)">Karyawan</div>
          <div class="word" style="color: rgb(61, 227, 61)">PNS</div>
        </span>
      </h2>
  
      <div class="container mt-4 p-2" style="">
        <div class="d-flex justify-content-center flex-wrap gap-4 m-4">
          <div class="text-center">
            <strong>Sejak 2025</strong>
            Pertama di Indonesia
          </div>
          <div class="text-center">
            <strong>400+ Koin</strong>
            Aset Kripto Terdaftar
          </div>
          <div class="text-center">
            <strong>7.5 Juta</strong>
            Member Terdaftar
          </div>
        </div>
      </div>

    </div>

    {{-- CAROUSEL --}}
    <div class="container border rounded-4 border-3 mt-4 border-success p-3 text-light">
      <h1 class="mb-2">Informasi Terkini</h1>

      <div class="container d-flex justify-content-center mt-3">
        <div id="CarouselSlot" class="carousel slide" data-bs-ride="carousel" style="max-width: 520px;">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
      
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://blog.indodax.com/wp-content/uploads/2025/04/Cuan-Sesimple-Itu_April-2025_Blog-1200x520-2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://blog.indodax.com/wp-content/uploads/2025/04/Cuan-Sesimple-Itu_April-2025_Blog-1200x520-2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://blog.indodax.com/wp-content/uploads/2025/04/Cuan-Sesimple-Itu_April-2025_Blog-1200x520-2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://blog.indodax.com/wp-content/uploads/2025/04/Cuan-Sesimple-Itu_April-2025_Blog-1200x520-2.png" class="d-block w-100" alt="...">
            </div>
          </div>
      
          <button class="carousel-control-prev" type="button" data-bs-target="#CarouselSlot" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#CarouselSlot" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    
    
{{-- Game Cards Section --}}
<div class="container my-5">
  <div class="text-center mb-5">
      <h1 class="display-5 fw-bold text-success mb-3">Featured Services</h1>
      <p class="text-light">Start your financial journey with our premium services</p>
  </div>

  <div class="row g-4 justify-content-center">
      <!-- Trading Card -->
      <div class="col-lg-4 col-md-6">
          <div class="card h-100 border-3 border-success bg-dark-transparent hover-scale shadow-lg">
              <div class="card-img-top position-relative overflow-hidden">
                  <img src="https://xtb.scdn5.secure.raxcdn.com/kb_main_photo/0102/92/9ecbe35a-70bc-4b2e-80aa-74c65b57e09f/kb_main_photo_front/1-trading-what-is-it.png" 
                       class="img-fluid w-100" 
                       style="height: 250px; object-fit: cover"
                       alt="Trading">
                  <div class="img-overlay bg-dark bg-opacity-50"></div>
              </div>
              <div class="card-body text-center py-4">
                  <div class="icon-box mb-3">
                      <i class="fas fa-chart-line fa-3x text-success"></i>
                  </div>
                  <h3 class="card-title text-light mb-3">Smart Trading</h3>
                  <p class="text-secondary mb-4">Trade with confidence using our advanced tools</p>
                  <a href="trading" class="btn btn-success px-5 py-2 rounded-pill hover-grow">
                      Start Trading <i class="fas fa-arrow-right ms-2"></i>
                  </a>
              </div>
          </div>
      </div>

      <!-- Market Card -->
      <div class="col-lg-4 col-md-6">
          <div class="card h-100 border-3 border-success bg-dark-transparent hover-scale shadow-lg">
              <div class="card-img-top position-relative overflow-hidden">
                  <img src="https://img.wirexapp.com/image/upload/q_80/dpr_auto/f_auto/v1/wirexapp/wirex50/upload/miej3ugbsxsuqhijxlxj.png" 
                       class="img-fluid w-100" 
                       style="height: 250px; object-fit: cover"
                       alt="Market">
                  <div class="img-overlay bg-dark bg-opacity-50"></div>
              </div>
              <div class="card-body text-center py-4">
                  <div class="icon-box mb-3">
                      <i class="fas fa-coins fa-3x text-warning"></i>
                  </div>
                  <h3 class="card-title text-light mb-3">Live Market</h3>
                  <p class="text-secondary mb-4">Real-time market data and analysis</p>
                  <a href="market" class="btn btn-warning px-5 py-2 rounded-pill hover-grow">
                      View Markets <i class="fas fa-chart-bar ms-2"></i>
                  </a>
              </div>
          </div>
      </div>

      <!-- Deposit Card -->
      <div class="col-lg-4 col-md-6">
          <div class="card h-100 border-3 border-success bg-dark-transparent hover-scale shadow-lg">
              <div class="card-img-top position-relative overflow-hidden">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJfjHN-n8lSKjNwJWYUrvxIIwFp78Gv5ezCQ&s" 
                       class="img-fluid w-100" 
                       style="height: 250px; object-fit: cover"
                       alt="Deposit">
                  <div class="img-overlay bg-dark bg-opacity-50"></div>
              </div>
              <div class="card-body text-center py-4">
                  <div class="icon-box mb-3">
                      <i class="fas fa-wallet fa-3x text-info"></i>
                  </div>
                  <h3 class="card-title text-light mb-3">Instant Deposit</h3>
                  <p class="text-secondary mb-4">Fast and secure transaction processing</p>
                  <a href="donasi" class="btn btn-info px-5 py-2 rounded-pill hover-grow">
                      Deposit Now <i class="fas fa-credit-card ms-2"></i>
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>


    {{-- tabel koin --}}
    <div class="container my-5">
      <h1 class="text-center text-light mb-4">Harga Crypto Real-time</h1>
      <div class="table-responsive">
          <table class="table table-striped table-hover text-center align-middle">
              <thead class="table-dark">
                  <tr>
                      <th scope="col">Nama Coin</th>
                      <th scope="col">Harga (idr)</th>
                      <th scope="col">Perubahan 24h (%)</th>
                  </tr>
              </thead>
              <tbody id="crypto-table-body">
                  {{-- tabel dari js akan muncul disini --}}
              </tbody>
          </table>
      </div>
    </div>
    
{{-- pembayaran --}}
<div class="container mt-5 p-4 rounded-4 border border-3 border-success mb-4 bg-dark-transparent">
  <div class="text-center mb-5">
      <h1 class="display-5 fw-bold text-success mb-3">Mitra Pembayaran</h1>
      <p class="text-light">Transaksi aman dan terjamin melalui institusi keuangan terpercaya</p>
  </div>

  <!-- Virtual Account Banks -->
  <div class="row g-4 justify-content-center mb-5">
      <h3 class="text-light text-center mb-4"><i class="bi bi-bank me-2"></i>Virtual Account</h3>
      <div class="col-auto text-center">
          <div class="d-flex flex-column align-items-center hover-grow">
              <img src="https://logowik.com/content/uploads/images/permata-bank-new-20245093.logowik.com.webp" 
                   alt="Permata VA" 
                   class="img-fluid mb-2"
                   style="height: 40px">
              <span class="text-success">Permata VA</span>
          </div>
      </div>
      <div class="col-auto text-center">
          <div class="d-flex flex-column align-items-center hover-grow">
              <img src="https://logowik.com/content/uploads/images/bni-bank-negara-indonesia8078.logowik.com.webp" 
                   alt="BNI VA" 
                   class="img-fluid mb-2"
                   style="height: 40px">
              <span class="text-success">BNI VA</span>
          </div>
      </div>
      <div class="col-auto text-center">
          <div class="d-flex flex-column align-items-center hover-grow">
              <img src="https://buatlogoonline.com/wp-content/uploads/2022/10/Logo-Bank-BRI.png" 
                   alt="BRI VA" 
                   class="img-fluid mb-2"
                   style="height: 40px">
              <span class="text-success">BRI VA</span>
          </div>
      </div>
      <div class="col-auto text-center">
          <div class="d-flex flex-column align-items-center hover-grow">
              <img src="https://www.cdnlogo.com/logos/b/21/bank-mandiri.svg" 
                   alt="Mandiri VA" 
                   class="img-fluid mb-2"
                   style="height: 40px">
              <span class="text-success">Mandiri VA</span>
          </div>
      </div>
      <div class="col-auto text-center">
          <div class="d-flex flex-column align-items-center hover-grow">
              <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bca.webp" 
                   alt="BCA VA" 
                   class="img-fluid mb-2"
                   style="height: 40px">
              <span class="text-success">BCA VA</span>
          </div>
      </div>
  </div>

  <!-- E-Wallets -->
  <div class="row g-4 justify-content-center">
      <h3 class="text-light text-center mb-4"><i class="bi bi-wallet2 me-2"></i>Dompet Digital</h3>
      <div class="col-auto text-center">
          <div class="d-flex flex-column align-items-center hover-grow">
              <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/gopay_color.webp" 
                   alt="Gopay" 
                   class="img-fluid mb-2"
                   style="height: 40px">
              <span class="text-success">Gopay</span>
          </div>
      </div>
      <div class="col-auto text-center">
          <div class="d-flex flex-column align-items-center hover-grow">
              <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/shopeepay.webp" 
                   alt="Shopee Pay" 
                   class="img-fluid mb-2"
                   style="height: 40px">
              <span class="text-success">Shopee Pay</span>
          </div>
      </div>
      <div class="col-auto text-center">
          <div class="d-flex flex-column align-items-center hover-grow">
              <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/dana.webp" 
                   alt="Dana" 
                   class="img-fluid mb-2"
                   style="height: 40px">
              <span class="text-success">Dana</span>
          </div>
      </div>
      <div class="col-auto text-center">
          <div class="d-flex flex-column align-items-center hover-grow">
              <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/ovo.webp" 
                   alt="OVO" 
                   class="img-fluid mb-2"
                   style="height: 40px">
              <span class="text-success">OVO</span>
          </div>
      </div>
  </div>
</div>

    <div class=" text-white text-center mt-5 p-2" style="background-color: grey">
      <div class="row m-3">
        <p1 class="fs-4">Urban Trade berizin dan diawasi oleh Otoritas Jasa Keuangan (OJK) serta terdaftar dan tersertifikasi oleh:</p1>
      </div>
      <div class="row">
        <div class="col">
          <img src="https://indodax.com/v3-exchange/svg/logo/CFX.svg" alt="">
        </div>
        <div class="col">
          <img src="https://indodax.com/v3-exchange/svg/logo/logo-kki.svg" alt="">
        </div>
        <div class="col">
          <img src="https://indodax.com/v3-exchange/svg/logo/KEMKOMDIGI-new.svg" alt="">
        </div>
        <div class="col">
          <img src="https://indodax.com/v3-exchange/img/home/CBQA-ISO-27001.png" alt="" style="width: 100px; height: 100px">
        </div>
      </div>
    </div>

    {{-- <div>
      <h1>Harga Bitcoin Saat Ini</h1>
      <p id="btc-price">Loading...</p>
    </div>
    
    @vite(['resources/js/crypto.js']) --}}
  

    @include('partials/footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>