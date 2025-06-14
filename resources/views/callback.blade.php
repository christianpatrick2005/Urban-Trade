<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            
        }
    </style>
</head>
<body class="mt-5" style="background-color: #1e1e1e">
    @include('partials/navbar')
    
    <div class="container my-5 ">
        <div class="card text-white bg-dark shadow mt-5">
            <div class="card-header">
                <h4 class="mb-0"><i class="fas fa-receipt me-2"></i>Status Transaksi</h4>
            </div>
            <div class="card-body">
                @if(session('status') == 'PAID')
                    <div class="alert alert-success">
                        Terima kasih! Transaksi Anda telah berhasil.
                    </div>
                @elseif(session('status'))
                    <div class="alert alert-danger">
                        Transaksi Anda gagal atau belum dibayar. Status: {{ session('status') }}
                    </div>
                @else
                    <div class="alert alert-warning">
                        Tidak ada informasi transaksi tersedia.
                    </div>
                @endif

                <ul class="list-group list-group-flush mt-4">
                    <li class="list-group-item bg-dark text-white"><strong>Invoice:</strong> {{ session('invoice') }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Nama:</strong> {{ session('nama') }}</li>
                    <li class="list-group-item bg-dark text-white"><strong>Nominal:</strong> Rp {{ number_format(session('nominal'), 0, ',', '.') }}</li>
                </ul>
            </div>
        </div>
    </div>

    @include('partials/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
