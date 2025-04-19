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
      height: 41px;
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
          <div class="word">Pensiunan</div>
          <div class="word">Mahasiswa</div>
          <div class="word">Pekerja</div>
          <div class="word">Pengangguran</div>
        </span>
      </h2>
  
      <div class="d-flex justify-content-center flex-wrap gap-4 mt-4">
        <div class="text-center">
          <strong>Sejak 2014</strong>
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

    {{-- CAROUSEL --}}
    {{-- <div id="CarouselSlot" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://blog.indodax.com/wp-content/uploads/2025/04/Cuan-Sesimple-Itu_April-2025_Blog-1200x520-2.png" class="d-block " width="500px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://blog.indodax.com/wp-content/uploads/2025/04/Cuan-Sesimple-Itu_April-2025_Blog-1200x520-2.png" class="d-block " width="500px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://blog.indodax.com/wp-content/uploads/2025/04/Cuan-Sesimple-Itu_April-2025_Blog-1200x520-2.png" class="d-block " width="500px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://blog.indodax.com/wp-content/uploads/2025/04/Cuan-Sesimple-Itu_April-2025_Blog-1200x520-2.png" class="d-block" width="500px" alt="...">
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
    </div> --}}
    
    {{-- CARD berbagai Game --}}
    <div class="container mt-5 p-3 rounded-4 border border-3 border-success" style="background-color: #2c2c2c">
      <h1 class="text-center mb-3 text-light">Games</h1>
      <div class="row justify-content-center">
        <div class="col-auto mb-4">
          <div class="card rounded-4 border border-3 border-success" style="width: 18rem; background-color: rgb(66, 63, 63)">
            <img src="https://res.cloudinary.com/rey0303/image/upload/v1727615283/judibola.xyz_dpavqm.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-light">Trading</h5>
              <a href="" class="btn btn-success">Trade Now</a>
            </div>
          </div>
        </div>
        <div class="col-auto mb-4">
          <div class="card rounded-4 border border-3 border-success" style="width: 18rem; background-color: rgb(66, 63, 63)">
            <img src="https://img.viva88athenae.com/pp/images/vs5triple8gold.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-light">Market</h5>
              <a href="" class="btn btn-success">Trade Now</a>
            </div>
          </div>
        </div>
        <div class="col-auto mb-4">
          <div class="card rounded-4 border border-3 border-success" style="width: 18rem; background-color: rgb(66, 63, 63)">
            <img src="https://img.viva88athenae.com/mg/images/smg_treasurestacks_icon_square_250x250_en.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-light">Deposit</h5>
              <a href="" class="btn btn-success">Depo Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- tabel koin --}}
    <div class="container p-4 mt-4 border border-solid">
      <table class="table table-dark table-hover text-center">
        <thead>
          <tr>
            <th scope="col ">Nama Koin</th>
            <th scope="col">Harga Terakhir</th>
            <th scope="col">presentase</th>
            <th scope="col">Grafik</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="align-middle">
              <img src="https://indodax.com/v2/logo/svg/color/btc.svg" alt="">
              BTC</td>
            <td class="align-middle">14.000</td>
            <td class="align-middle">13%</td>
            <td class="w-50">
              <div id="my-chart" class="d-flex justify-content-center align-items-center">
                <table class="charts-css area show-labels">
                  <tbody>
                    <tr><td style="--start: 0.2; --end: 0.4;"><span class="data">$40K</span></td></tr>
                    <tr><td style="--start: 0.4; --end: 0.6;"><span class="data">$42K</span></td></tr>
                    <tr><td style="--start: 0.6; --end: 0.5;"><span class="data">$41K</span></td></tr>
                  </tbody>
                </table>
              </div>              
            </td>
          </tr>
          <tr>
            <td class="align-middle">
              <img src="https://indodax.com/v2/logo/svg/color/xrp.svg" class="" alt="" width="32px">
              XRP</td>
            <td class="align-middle">14.000</td>
            <td class="align-middle">13%</td>
            <td class="w-50">
              <div id="my-chart" class="d-flex justify-content-center align-items-center">
                <table class="charts-css area show-labels">
                  <tbody>
                    <tr><td style="--start: 0.2; --end: 0.4;"><span class="data">$40K</span></td></tr>
                    <tr><td style="--start: 0.4; --end: 0.6;"><span class="data">$42K</span></td></tr>
                    <tr><td style="--start: 0.6; --end: 0.5;"><span class="data">$41K</span></td></tr>
                  </tbody>
                </table>
              </div>              
            </td>
          </tr>
          <tr>
            <td class="align-middle">
              <img src="https://indodax.com/v2/logo/svg/color/eth.svg" alt="">
              ETH</td>
            <td class="align-middle">14.000</td>
            <td class="align-middle">13%</td>
            <td class="w-50">
              <div id="my-chart" class="d-flex justify-content-center align-items-center">
                <table class="charts-css area show-labels">
                  <tbody>
                    <tr><td style="--start: 0.2; --end: 0.4;"><span class="data">$20k</span></td></tr>
                    <tr><td style="--start: 0.4; --end: 0.6;"><span class="data">$42K</span></td></tr>
                    <tr><td style="--start: 0.6; --end: 0.5;"><span class="data">$41K</span></td></tr>
                  </tbody>
                </table>
              </div>              
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    {{-- pembayaran --}}
    <div class="container mt-5 p-3 rounded-4 border border-3 border-success" style="background-color: #2c2c2c">
      <div class="row g-2 text-light">
        <div class="border-bottom border-3">
          <h1>Sistem Pembayaran</h1>
        </div>
          <div class="col-md-2">
              <div class="card text-center btn btn-dark" type="button">
                  <div class="image">
                      <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/gopay_color.webp" height="50" width="70">
                  </div>
              </div>
              <div class="container">
                <h5 class="text-center">Gopay</h5>
              </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center btn btn-dark" type="button">
                <div class="image">
                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/shopeepay.webp" height="50" width="70">
                </div>
            </div>
            <div class="container">
              <h5 class="text-center">Shopee Pay</h5>
            </div>
        </div>
        <div class="col-md-2">
          <div class="card text-center btn btn-dark" type="button">
              <div class="image">
                  <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/dana.webp" height="50" width="70">
              </div>
          </div>
          <div class="container">
            <h5 class="text-center">Dana</h5>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card text-center btn btn-dark" type="button">
              <div class="image">
                  <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/qris.webp" height="50" width="70">
              </div>
          </div>
          <div class="container">
            <h5 class="text-center">Qris</h5>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card text-center btn btn-dark" type="button">
              <div class="image">
                  <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/ovo.webp" height="50" width="70">
              </div>
          </div>
          <div class="container">
            <h5 class="text-center">OVO</h5>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card text-center btn btn-dark" type="button">
              <div class="image">
                  <img src="https://appmanager.seabank.co.id/seamoney/bke/app-manager/live/front_low_code/20230921/ea2515cefe5c4b4cb9e0776003124e0f.png" height="50" width="70">
              </div>
          </div>
          <div class="container">
            <h5 class="text-center">Sea Bank</h5>
          </div>
        </div>
          
        <div class="col-md-2">
          <div class="card text-center btn btn-dark" type="button">
              <div class="image">
                  <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bca.webp" height="50" width="70">
              </div>
          </div>
          <div class="container">
            <h5 class="text-center">Bank Bca</h5>
          </div>
        </div>
      </div>
    </div>

    @include('partials/footer')

    {{-- <script>
        let count = 1000000; // Initialize the counter
    
        // Function to update the counter
        function updateCounter() {
            count++;     // Increment the counter
            document.getElementById('count').innerText = count.toLocaleString('id-ID'); // Format ke mata uang
        }
    
        // Update the counter every second
        setInterval(updateCounter, 100);
    </script> --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>