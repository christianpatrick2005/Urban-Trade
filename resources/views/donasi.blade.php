<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi Sosial - Laravel</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
        .form-control {
            background-color: #2d2d2d;
            border: 1px solid #3d3d3d;
            color: #ffffff;
        }
        .form-control:focus {
            background-color: #3d3d3d;
            color: #ffffff;
            border-color: #4d4d4d;
            box-shadow: none;
        }
        .card {
            background: #1e1e1e;
            border: 1px solid #333;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn-gradient {
            background: linear-gradient(45deg, #00c853, #009624);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,200,83,0.3);
        }
        .payment-method-card {
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .payment-method-card:hover {
            border-color: #00c853;
            background-color: #2d2d2d;
        }

        .payment-logo {
            filter: brightness(0.9);
            transition: filter 0.2s ease;
        }

        .payment-method-card:hover .payment-logo {
            filter: brightness(1.2);
        }
    </style>
</head>

<body style="margin-top: 120px">
    @include("partials/navbar")
    
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-light">
                <div class="card">
                    <div class="card-header bg-dark-gradient py-3">
                        <h4 class="mb-0 text-center text-white">
                            <i class="fas fa-hand-holding-heart me-2"></i>
                            Formulir Donasi Sosial
                        </h4>
                    </div>
                    
                    <div class="card-body p-4">
                        <form method="post" action="{{ route('proccess') }}">
                            @csrf
                            
                            <div class="mb-4">
                                <label class="form-label text-white">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-dark">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label text-white">Alamat Email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-dark">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label text-white">Nomor HP/WhatsApp</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-dark">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <input type="text" name="nohp" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label text-white">Nominal Donasi</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-dark">
                                        <i class="fas fa-coins"></i>
                                    </span>
                                    <input type="number" name="nominal" class="form-control" required>
                                    <span class="input-group-text bg-dark border-dark text-white">IDR</span>
                                </div>
                            </div>

                            <hr class="bg-secondary my-4">

                            <h5 class="mb-3 text-white"><i class="fas fa-wallet me-2 "></i>Metode Pembayaran</h5>
                            
                            <div class="row g-3 mb-4">
                                @foreach ($metode as $m)
                                <div class="col-md-6">
                                    <div class="form-check card p-3 bg-dark border-secondary">
                                        <input class="form-check-input" type="radio" name="metode" 
                                            id="{{ $m->code }}" value="{{ $m->code }}" required>
                                        <label class="form-check-label text-white" for="{{ $m->code }}">
                                            {{ $m->name }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-gradient btn-lg py-3">
                                    <i class="fas fa-donate me-2"></i>
                                    Lanjutkan Donasi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("partials/footer")

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>