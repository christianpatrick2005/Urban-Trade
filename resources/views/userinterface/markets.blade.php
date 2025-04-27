<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Markets</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    @vite(['resources/js/crypto.js'])
</head>
<body style="background-color: #1e1e1e; padding-top: 130px">
    @include('partials/navbar')
    
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
                    <tbody id="market-table-body">
                        {{-- tabel dari js akan muncul disini --}}
                    </tbody>
                </table>
            </div>
        </div>
    
    @include('partials/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>