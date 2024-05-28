<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Desa Wisata Cengek</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <x-navbar></x-navbar>

  <x-header>Homepage</x-header>

  <div class="container-flex jumbotron">
    <div class="col-md-12 pt-4 text-center">
      <img src="{{ asset('images/home-img.jpeg') }}" alt="pemandangan" class="rounded"
        style="width: 37%; box-shadow: 0px 3px 6px gray;" />
      <div class="pt-5">
        <h1 class="display-4">Selamat Datang</h1>
        <h2 class="display-6">di Desa Tingkir Lor</h2>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#f6f1f1" fill-opacity="1"
            d="M0,0L40,26.7C80,53,160,107,240,122.7C320,139,400,117,480,133.3C560,149,640,203,720,197.3C800,192,880,128,960,112C1040,96,1120,128,1200,122.7C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
          </path>
        </svg>
      </div>
    </div>
  </div>
  </div>

  <div class="container">
    <div class="row justify-content-center ms-3">
      <div class="col-md-12 text-center mb-5">
        <h3 class="display-6">Tentang</h3>
      </div>
      <div class="col-md-8">
        <p class="" style="font-size: 18px;">
          Tingkir Lor adalah sebuah desa berbasis wisata yang berada di Kelurahan Tingkir Lor, Kecamatan Tingkir, Kota
          Salatiga, Provinsi Jawa Tengah.<br><br> Desa Wisata Tingkir Lor memiliki lanskap alam yang indah mulai dari
          gunung-gunung hingga area persawahan yang hijau. Lokasinya hanya 300 meter di sisi barat pintu keluar Tol
          Salatiga. Selain wisata alam, Desa Tingkir lor terdapat makam Mbah Abdul Wahid yang merupakan canggah KH
          Abdurrahman Wahid, atau Gus Dur. Wisatawan juga dapat mencoba paket wisata bersepeda dengan suasana pedesaan
          yang asri dan sejuk.
        </p>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#e2edff" fill-opacity="1"
      d="M0,288L40,277.3C80,267,160,245,240,208C320,171,400,117,480,117.3C560,117,640,171,720,181.3C800,192,880,160,960,128C1040,96,1120,64,1200,80C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg>


  <section id="galeri" style="background-color: #e2edff;">
    <div class="container">
      <div class="row text-center justify-content-center mb-5">
        <div class="col-md-12 mb-5">
          <h3 class="display-6">Galeri</h3>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="{{ asset('images/1.jpg') }}" class="card-img-top" alt="1">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="{{ asset('images/2.jpg') }}" class="card-img-top" alt="2">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="{{ asset('images/3.jpg') }}" class="card-img-top" alt="3">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="{{ asset('images/4.jpg') }}" class="card-img-top" alt="4">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="{{ asset('images/1.jpg') }}" class="card-img-top" alt="1">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        </svg>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#273044" fill-opacity="1"
        d="M0,192L120,186.7C240,181,480,171,720,170.7C960,171,1200,181,1320,186.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
      </path>
    </svg>
  </section>

  <footer class="pb-5 text-white text-center " style="background-color: #273044;">
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