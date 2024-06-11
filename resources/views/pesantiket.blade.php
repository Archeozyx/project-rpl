<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Wisata Cengek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

<body>

    <x-navbar></x-navbar>

    <x-header>Form Pesan Tiket</x-header>

    <div class="container mt-5">
        <h2 class="mb-4">Form Pemesanan Tiket Online</h2>
        <div class="row justify-content-center">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon Anda"
                        required>
                </div>
                <div class="mb-3">
                    <label for="event" class="form-label">Pilih Acara</label>
                    <select class="form-select" id="event" required>
                        <option selected disabled value="">Pilih acara</option>
                        <option value="concert">Konser Musik</option>
                        <option value="theater">Teater</option>
                        <option value="sport">Pertandingan Olahraga</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tickets" class="form-label">Jumlah Tiket</label>
                    <input type="number" class="form-control" id="tickets" min="1"
                        placeholder="Masukkan jumlah tiket yang diinginkan" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal Acara</label>
                    <input type="date" class="form-control" id="date" required>
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Waktu Acara</label>
                    <input type="time" class="form-control" id="time" required>
                </div>
                <button type="submit" class="btn btn-primary mb-5">Pesan Tiket</button>
            </form>
        </div>
    </div>

    <div class="container-flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#273044" fill-opacity="1"
                d="M0,192L120,186.7C240,181,480,171,720,170.7C960,171,1200,181,1320,186.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
            </path>
        </svg>
    </div>

    <footer class="pb-5 text-white text-center" style="background-color: #273044;">
        <h4 class="display-7">Desa Wisata Tingkir Lor</h4>
        <a href="https://www.instagram.com/desawisata_tingkirlor/" class="text-white fw-bold">Instagram <i
                class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/@dewitingkirlor6946" class="text-white fw-bold">Youtube <i
                class="bi bi-youtube"></i></a>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>