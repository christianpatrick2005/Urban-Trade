<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}"> --}}
</head>
<body class="bg-pan-left">
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-light mt-5 text-flicker-in-glow">Login Form</h2>
            <div class="card my-5" data-bs-theme="light">
              <form class="card-body cardbody-color p-lg-5" action="{{ route('login.submit') }}" method="POST" >
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- logo --}}
                <div class="text-center">
                  <img src="{{ asset('images/logo dgn tulisan.png') }}" class="img-fluid my-3" width="300px" alt="profile">
                </div>
                
                {{-- input username --}}
                <div class="mb-3">
                  <input type="text" class="form-control" id="username" name="username" aria-describedby="Username" placeholder="User Name" required>
                </div>

                {{-- input password --}}
                <div class="mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required minlength="8" maxlength="15">
                </div>

                {{-- tombol login --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-color px-5 mb-5 w-100 text-light bg-dark" >Login</button>
                </div>

                <div class="form-text text-center mb-5 text-dark">
                  Tidak terdaftar? 
                  <a href="{{ route('register') }}" class="text-dark fw-bold"> Buat Akun</a>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
