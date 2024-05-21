
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #273044;">
      <div class="container">
        <a class="navbar-brand" href="#">Desa Wisata Tingkir Lor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('wisata') }}">Wisata</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Akun
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

