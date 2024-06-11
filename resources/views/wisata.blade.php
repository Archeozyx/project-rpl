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

    <x-header>Wisata</x-header>

    <div class="container-flex">
        <div class="row justify-content-center">

            <div class="card border-0 " style="background-color: #e2edff;">
                <div class="row">
                    <div class="col-md-4 p-5 ms-5">
                        <img src="{{ asset('images/paket-gowes.png') }}" class="img-fluid rounded-start border shadow"
                            style="width: 70%;" alt="paket-gowes">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body" style="padding-top: 5rem;">
                            <h5 class="card-title h2">Paket Wisata Gowes</h5>
                            <p class="card-text">Akeses jalan yang sempit serta hypenya berspeda saat pandemi Covid-19
                                memunculkan ide untuk membuat wisata gowes Tingkir Lor.
                                Rutenya mulai dari area persawahan yang sejuk dan asri, memasuki sentra UMKM, dan
                                melalui wisata religi di Makam Mbah Abdul Wahid.
                            </p>

                            <a href="{{ route('pesan') }}" class="btn btn-primary mt-5" role="button">Pesan
                                Tiket</a>
                        </div>
                    </div>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e2edff" fill-opacity="1"
                    d="M0,128L30,144C60,160,120,192,180,186.7C240,181,300,139,360,117.3C420,96,480,96,540,112C600,128,660,160,720,192C780,224,840,256,900,240C960,224,1020,160,1080,138.7C1140,117,1200,139,1260,138.7C1320,139,1380,117,1410,106.7L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
                </path>
            </svg>


            <div class="card border-0 " style="background-color: #ffffff;">
                <div class="row">
                    <div class="col-md-4 ps-5 ms-5">
                        <img src="{{ asset('images/paket-religi.png') }}" class="img-fluid rounded-start border shadow"
                            style="width: 70%;" alt="paket-tempe">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body" style="padding-top: 5rem;">
                            <h5 class="card-title h2">Wisata Religi Makam Mbah Abdul Wahid </h5>
                            <p class="card-text">Diketahui bahwa keluarga besar mantan Presiden RI KH
                                Abdurrahman Wahid (Gus Dur) selama ini berada di Jombang, tepatnya di komplek
                                Pesantren Tebuireng. Namun, tidak banyak yang tahu ada juga jejak makam keluarga
                                Gus Dur yang berada di Salatiga, tepatnya di Tingkir. Yakni adanya makam Kiai
                                Abdul Wahid yang merupakan kakek buyut Gus Dur di Tingkir Lor, Tingkir,
                                Salatiga. Dari Kiai Abdul Wahid terlahir keturunan Kiai Asyari, KH Hasyim
                                Asyari, KH Abdul Wahid Hasyim dan selanjutnya KH Abdurrahman Wahid atau Gus
                                Dur. 
                            </p>
                            
                            <a href="{{ route('pesan') }}" class="btn btn-primary mt-5" role="button">Pesan
                                Tiket</a>
                        </div>
                    </div>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e2edff" fill-opacity="1"
                    d="M0,224L30,218.7C60,213,120,203,180,208C240,213,300,235,360,224C420,213,480,171,540,176C600,181,660,235,720,224C780,213,840,139,900,133.3C960,128,1020,192,1080,197.3C1140,203,1200,149,1260,144C1320,139,1380,181,1410,202.7L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                </path>
            </svg>

            <div class="card border-0 " style="background-color: #e2edff;">
                <div class="row">
                    <div class="col-md-4 ps-5 ms-5">
                        <img src="{{ asset('images/paket-tempe.png') }}" class="img-fluid rounded-start border shadow"
                            style="width: 70%;" alt="paket-tempe">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body" style="padding-top: 5rem;">
                            <h5 class="card-title h2">Paket Wisata Edukasi Coklat Tempe</h5>
                            <p class="card-text">Nikmati pengalaman unik dan mendalam di wisata edukasi
                                pembuatan coklat tempe, di mana Anda bisa mempelajari proses transformasi biji
                                kakao menjadi coklat lezat dan mengagumi inovasi lokal dalam pembuatan tempe
                                yang sehat dan bergizi. Dalam tur ini, Anda akan dibimbing oleh para ahli yang
                                akan memperkenalkan Anda pada teknik-teknik tradisional dan modern dalam
                                produksi coklat dan tempe. Selain itu, Anda juga memiliki kesempatan untuk
                                mencicipi hasil karya sendiri serta membawa pulang produk-produk eksklusif
                                sebagai kenang-kenangan. Tempat ini tidak hanya menawarkan pengalaman belajar
                                yang menyenangkan, tetapi juga mendukung pemberdayaan komunitas lokal dan
                                keberlanjutan lingkungan. Ayo, jadikan kunjungan Anda penuh makna dengan
                                merasakan langsung keajaiban proses pembuatan coklat dan tempe!
                            </p>

                            <a href="{{ route('pesan') }}" class="btn btn-primary mt-5" role="button">Pesan
                                Tiket</a>
                        </div>
                    </div>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e2edff" fill-opacity="1"
                    d="M0,224L30,218.7C60,213,120,203,180,176C240,149,300,107,360,101.3C420,96,480,128,540,160C600,192,660,224,720,224C780,224,840,192,900,165.3C960,139,1020,117,1080,117.3C1140,117,1200,139,1260,144C1320,149,1380,139,1410,133.3L1440,128L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
                </path>
            </svg>

            <div class="card border-0 " style="background-color: #ffffff;">
                <div class="row">
                    <div class="col-md-4 ps-5 ms-5">
                        <img src="{{ asset('images/paket-gamelan.png') }}" class="img-fluid rounded-start border shadow"
                            style="width: 70%;" alt="paket-gamelan">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body" style="padding-top: 5rem;">
                            <h5 class="card-title h2">Paket Wisata Budaya Nabuh Gamelan</h5>
                            <p class="card-text">Paket Wisata Budaya Nabuh Gamelan menawarkan pengalaman unik
                                bagi para wisatawan untuk merasakan kekayaan budaya Indonesia melalui seni
                                gamelan. Dalam paket ini, Anda akan diajak untuk belajar dan memainkan alat
                                musik tradisional gamelan bersama para ahli, serta memahami sejarah dan filosofi
                                yang mendalam di balik setiap bunyi dan nada. Selain itu, Anda juga akan
                                menikmati pertunjukan gamelan yang memukau, mengunjungi tempat-tempat
                                bersejarah, dan berinteraksi langsung dengan komunitas setempat. Nikmati
                                kekayaan warisan budaya yang penuh harmoni dan dapatkan pengalaman tak
                                terlupakan dalam perjalanan budaya Anda bersama Paket Wisata Budaya Nabuh
                                Gamelan.
                            </p>
                            
                            <a href="{{ route('pesan') }}" class="btn btn-primary mt-5" role="button">Pesan
                                Tiket</a>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#273044" fill-opacity="1"
                    d="M0,192L120,186.7C240,181,480,171,720,170.7C960,171,1200,181,1320,186.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
                </path>
            </svg>
        </div>
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