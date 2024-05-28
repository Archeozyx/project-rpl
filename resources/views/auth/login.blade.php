<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Wisata Tingkir Lor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-color: #e2edff;">
    <x-navbar></x-navbar>
    <x-header>Selamat Datang di Desa Wisata Tingkir Lor</x-header>

    <div class="container mt-5">
        <h2 class="welcome-text text-center">Selamat Datang di Desa Wisata Tingkir Lor</h2>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Kata Sandi">
                            <div class="mt-2 text-end">
                                <a href="#" class="text-decoration-none">Lupa Kata Sandi?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Masuk Sekarang</button>
                        <div class="mt-2 text-center">
                            <a href="{{ route('register') }}" class="text-decoration-none">Tidak Ada Akun?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>