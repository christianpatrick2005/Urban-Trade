<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-pan-left">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mt-5 text-flicker-in-glow">Registration Form</h2>
                <div class="card my-5" data-bs-theme="light" style="background-color: whitesmoke">
                    {{-- sementara agar halaman home dpt diakses pake action dan get method --}}
                    <form class="card-body cardbody-color p-lg-5" action="{{ route('register.store') }}" method="POST" id="registrationForm">
                        @csrf
                        
                        {{-- logo --}}
                        <div class="text-center">
                            <img src="{{ asset('images/logo dgn tulisan.png') }}" class="img-fluid" width="300px" alt="profile">
                        </div>
                        
                        {{-- input username --}}
                        <div class="mb-3 mt-5">
                            <input type="text" class="form-control" id="username" name="username" placeholder="User Name" required>
                        </div>
                    
                        {{-- input password --}}
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required minlength="8" maxlength="15">
                        </div>
                    
                        {{-- Konfirmasi password --}}
                        <div class="mb-3">
                            <input type="password" class="form-control" id="konfirmasi_password" name="password_confirmation" placeholder="Konfirmasi Password" required>
                        </div>
                    
                        {{-- input Nomor tel --}}
                        <div class="mb-3">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor Telp" required minlength="8" maxlength="12">
                        </div>
                    
                        {{-- input rekening bank --}}
                        <div class="mb-3">
                            <input type="text" class="form-control" id="bank_account" name="bank_account" placeholder="No Rekening Bank" required minlength="10" maxlength="16">
                        </div>
                    
                        {{-- input nama rekening bank --}}
                        <div class="mb-3">
                            <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Nama Rekening Bank" required>
                        </div>
                    
                        {{-- input Email --}}
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email @gmail.com" required>
                        </div>
                    
                        {{-- tombol login --}}
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-color px-5 w-100 text-light bg-dark">Buat Akun</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <script>
       document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah form dari submit otomatis

    // Mengambil nilai dari form
    var password = document.getElementById("password").value;
    var konfirmasiPassword = document.getElementById("konfirmasi_password").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;

    // Validasi email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Format email tidak valid!");
        return;
    }

    // Validasi nomor telepon
    if (phone.length < 8 || phone.length > 12 || isNaN(phone)) {
        alert("Nomor telepon harus terdiri dari 8-12 angka!");
        return;
    }

    // Validasi password dan konfirmasi password
    if (password !== konfirmasiPassword) {
        alert("Password dan konfirmasi password tidak cocok!");
        return;
    }

    this.submit(); // Submit form jika semua validasi lolos
});

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>
</html>