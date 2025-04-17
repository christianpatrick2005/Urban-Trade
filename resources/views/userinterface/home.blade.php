<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Slot</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <style>
    aside {
      position: fixed;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
    }
  </style>
</head>
<body class="" style="background-color: #1e1e1e; padding-top: 130px">
  {{-- infinite slider --}}
  @include('partials/infiniteSlider')
  
    {{-- NAVBAR --}}
    @include('partials/navbar')

    {{-- CAROUSEL --}}
    <div id="CarouselSlot" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#CarouselSlot" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/Carousel slot.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel slot 2.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel slot 3.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel slot 4.jpg') }}" class="d-block w-100" alt="...">
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

    {{-- jackpot gif --}}
    {{-- <div class="container text-center mt-5">
      <div class="position-relative">
          <img src="{{ asset('images/jackpot.gif') }}" class="img-fluid mt-3" alt="Animated GIF">
          <div id="counter" class="position-absolute top-50 start-50 translate-middle mt-3 mt-md-3 mt-lg-4 text-light fs-1 fs-md-2" style="font-family: fantasy">
              IDR <span id="count">10 </span>
          </div>
      </div>
    </div> --}}
    
    {{-- CARD berbagai Game --}}
    <div class="container mt-5 p-3 rounded-4 border border-3 border-success" style="background-color: #2c2c2c">
      <h1 class="text-center mb-3 text-light">Games</h1>
      <div class="row justify-content-center">
        <div class="col-auto mb-4">
          <div class="card rounded-4 border border-3 border-success" style="width: 18rem; background-color: rgb(66, 63, 63)">
            <img src="https://res.cloudinary.com/rey0303/image/upload/v1727615283/judibola.xyz_dpavqm.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-light">Sport Bet</h5>
              <a href="" class="btn btn-success">Play Now</a>
            </div>
          </div>
        </div>
        <div class="col-auto mb-4">
          <div class="card rounded-4 border border-3 border-success" style="width: 18rem; background-color: rgb(66, 63, 63)">
            <img src="https://img.viva88athenae.com/pp/images/vs5triple8gold.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-light">Slot</h5>
              <a href="" class="btn btn-success">Play Now</a>
            </div>
          </div>
        </div>
        <div class="col-auto mb-4">
          <div class="card rounded-4 border border-3 border-success" style="width: 18rem; background-color: rgb(66, 63, 63)">
            <img src="https://img.viva88athenae.com/mg/images/smg_treasurestacks_icon_square_250x250_en.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-light">Gambling</h5>
              <a href="" class="btn btn-success">Play Now</a>
            </div>
          </div>
        </div>
      </div>
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

    {{-- tampilan samping --}}
    {{-- <aside class="d-flex flex-column">
      <a href="{{ route('spinner') }}">
        <img src="https://images.linkcdn.cloud/global/icon-footer/spinwheel.webp" alt="" class="btn" type="button" width="100">
      </a>
      <a href="{{ route('slot') }}">
        <img src="https://media.tenor.com/TLTHTLrWmHIAAAAj/jos257-situsterpercaya.gif" alt="" class="btn" type="button" width="100">
      </a>
      <a href="{{ route('gambling') }}">
        <img src="https://i.gifer.com/origin/12/1267b8d856837b9fce217963d72dd8a1_w200.gif" alt="" class="btn" type="button" width="100">
      </a>
    </aside> --}}

    @include('partials/footer')

    <script>
        let count = 1000000; // Initialize the counter
    
        // Function to update the counter
        function updateCounter() {
            count++;     // Increment the counter
            document.getElementById('count').innerText = count.toLocaleString('id-ID'); // Format ke mata uang
        }
    
        // Update the counter every second
        setInterval(updateCounter, 100);
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>