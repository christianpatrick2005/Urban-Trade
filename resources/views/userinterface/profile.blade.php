<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .profile-section {
            padding: 2rem;
            margin-top: 2rem;
            background-color: #2d2d2d;
            border-radius: 15px;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .card {
            background-color: #343a40;
            border: 1px solid #454d55;
        }
        .list-group-item {
            background-color: #343a40;
            color: #ffffff;
            border-color: #454d55;
        }
    </style>
</head>
<body class="mt-5" style="background-color: #1e1e1e">
    @include('partials/navbar')
    
    <div class="container my-5">
        <div class="profile-section">
            <div class="text-center mb-4">
                <img src="/path/to/profile-image.jpg" alt="Profile Photo" class="profile-img rounded-circle">
                <h2 class="mt-3">@username</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Nomor Telepon
                            <span class="">+62 812-3456-7890</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Email
                            <span class="">user@example.com</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Nomor Rekening
                            <span class="">1234 5678 9012 3456</span>
                        </li>
                    </ul>

                    <div class="card mt-4">
                        <div class="card-body text-center">
                            <h5 class="card-title text-white">Saldo</h5>
                            <h2 class="card-text text-success">Rp 15.000.000,00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>