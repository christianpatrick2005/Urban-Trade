
    <style>

    .slider {
        display: flex;
        animation: slidein 20s linear infinite;
        white-space: nowrap;
        gap: 20px; /* Menambahkan jarak antar elemen */
    }

    .logos {
        display: flex;
        gap: 25px; /* Menambahkan jarak antar elemen dalam grup */
    }

        @keyframes slidein {
        from {
            transform: translate3d(0, 0, 0);
        }
        to {
            transform: translate3d(-100%, 0, 0);
        }
        }

        @keyframes fade-in {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
        }
    </style>

    <div class="container h-100 overflow-hidden text-light">
        <div class="row align-items-center h-100">
          <div class="container rounded">
            {{-- <h1 class="text-center">Featured in:</h1> --}}
            <div class="slider">
              <div class="logos">
                <i class="fs-6">Yuk betting tim favoritmu di sport-bet</i>
                <i class="fs-6">Real Madrid vs. Manchester City, Tanggal: 20 November 2024, Waktu: 21:00 WIB, Lokasi: Santiago Bernabéu Stadium</i>
                <i class="fs-6">Bayern Munich vs. Paris Saint-Germain, Tanggal: 21 November 2024, Waktu: 21:00 WIB, Lokasi: Allianz Arena</i>
              </div>
              <div class="logos">
                <i class="fs-6">Promo Free biaya admin berakhir sampai 2077</i>
                <i class="fs-6">Perhatian !!! UrbanSlot x Go-Pay</i>
                <i class="fs-6">cek3</i>
                <i class="fs-6">cek4</i>
                <i class="fs-6">cek5</i>
              </div>
            </div>
          </div>
        </div>  
    </div>
