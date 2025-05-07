<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .edit-section {
            padding: 2rem;
            margin-top: 2rem;
            background-color: #2d2d2d;
            border-radius: 15px;
        }
        .profile-img-edit {
            width: 150px;
            height: 150px;
            object-fit: cover;
            cursor: pointer;
        }
        .form-control {
            background-color: #343a40;
            border: 1px solid #454d55;
            color: #ffffff;
        }
        .form-control:focus {
            background-color: #343a40;
            border-color: #6c757d;
            color: #ffffff;
            box-shadow: none;
        }
    </style>
</head>
<body class="mt-5">
    @include('partials/navbar')

    <div class="container my-5">
        <div class="edit-section">
            <h2 class="mb-4 text-center">Edit Profile</h2>
            
            <form>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <!-- Profile Photo Upload -->
                        <div class="text-center mb-4">
                            <img src="/path/to/profile-image.jpg" alt="Profile Photo" 
                                 class="profile-img-edit rounded-circle mb-2"
                                 onclick="document.getElementById('profilePhoto').click()">
                            <input type="file" id="profilePhoto" hidden accept="image/*">
                            <p class="text-muted">Klik foto untuk mengubah</p>
                        </div>

                        <!-- Form Fields -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" 
                                   value="@username" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="phone" 
                                   value="+62 812-3456-7890" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" 
                                   value="user@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="bankAccount" class="form-label">Nomor Rekening Bank</label>
                            <input type="text" class="form-control" id="bankAccount" 
                                   value="1234 5678 9012 3456" required>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="/profile" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include('partials/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('profilePhoto').addEventListener('change', function(e) {
            const reader = new FileReader();
            reader.onload = function() {
                document.querySelector('.profile-img-edit').src = reader.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>
</body>
</html>