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

    <style>
        .list-group-item {
            background-color: #343a40;
            color: #ffffff;
            border-color: #454d55;
        }
    </style>
</head>
<body style="background-color: #1e1e1e; padding-top: 130px">
    @include('partials/navbar')
    
        <h1 class="text-center text-light mb-4">Withdraw</h1>

        <div class="container mt-5 p-4 rounded-4 border border-3 border-success mb-4 bg-dark-transparent">

            <div class="container mt-4 p-2" style="">
                <div class="d-flex justify-content-center flex-wrap gap-4 m-4">
                    <div class="container ">
                        <form id="waForm">
                            <div class="mb-3 text-light">
                                <label for="exampleFormControlTextarea1" class="form-label">Nominal Uang : </label>
                                <input type="number" class="form-control" id="message">
                            </div>

                            <ul class="list-group mb-4">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Username
                                    <span class="">{{ Auth::user()->username }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Nomor Telepon
                                    <span class="">{{ Auth::user()->phone }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Nama Rekening
                                    <span class="">{{ Auth::user()->account_name }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Nomor Rekening
                                    <span class="">{{ Auth::user()->bank_account }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Saldo
                                    <span class="">Rp {{ number_format(Auth::user()->saldo, 2, ',', '.') }}</span>
                                </li>
                            </ul>
                            
                            <div class="d-flex justify-content-center">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Format text</h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary">Harap periksa format text sebelum dikirim ke admin</h6>
                                        <p class="card-text" id="infoText">
                                            Nama : {{ Auth::user()->username }}, 
                                            Nama Rekening : {{ Auth::user()->account_name }}, 
                                            Nomor Rekening {{ Auth::user()->bank_account }}, 
                                            Nominal : <span id="nominalText"></span>, 
                                            Saldo : Rp {{ number_format(Auth::user()->saldo, 2, ',', '.') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" onclick="sendWA()" class="btn btn-primary mb-3">Kirim via WhatsApp</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script>
        const messageInput = document.getElementById("message");
        const nominalText = document.getElementById("nominalText");

        messageInput.addEventListener("input", function () {
            const value = this.value;
            if (value) {
                nominalText.textContent = "Rp " + parseFloat(value).toLocaleString('id-ID');
            } else {
                nominalText.textContent = "";
            }
        });

        function sendWA() {
            const message = document.getElementById("message").value;
            const phoneNumber = {{ Auth::user()->phone }};

            const encodedMessage = encodeURIComponent(message);

            window.open(`https://wa.me/${phoneNumber}?text=${encodedMessage}`, '_blank');

        }
    </script>
    
    @include('partials/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>