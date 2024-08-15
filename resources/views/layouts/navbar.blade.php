<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

  <header class=" py-3" id="header">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <img class="logo_bpp me-3" src="img/logo_bpp.png" alt="logo BPP" style="height: 60px;">
        <div class="text">
          <h1 class="h4 text-danger mb-0">Badan Penyuluhan Pertanian</h1>
          <h2 class="h6 text-secondary">Kec. Punggur Kab. Lampung Tengah Prov. Lampung</h2>
        </div>
      </div>
      <div class="d-flex">
        <img src="img/logo lampung tengah.png" alt="logo Lampung Tengah" class="me-3" style="height: 60px;">
        <img src="img/logo lampung.png" alt="logo Lampung" style="height: 60px;">
      </div>
    </div>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('berita') ? 'active' : '' }}" href="#">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('kegiatan') ? 'active' : '' }}" href="#">Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('edukasi') ? 'active' : '' }}" href="#">Edukasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('tentangkami') ? 'active' : '' }}" href="#">Tentang Kami</a>
          </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
          <input id="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger" type="submit">Search</button>
        </form>
        <li class="nav-item d-none d-lg-block">
          <div class="divider"></div>
        </li>

        <button id="login" class="btn btn-danger ms-lg-3" type="submit">Login</button>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col-12">
      @yield('container')
    </div>
  </div>

  <footer class="bg-light text-dark pt-5 pb-4">
  <div class="container">
    <div class="row gx-4">
      <div class="col-lg-4 col-md-6 mb-4">
        <h2 class="h5">Tentang Kami</h2>
        <p id="text-tentangkami">Badan Penyuluhan Pertanian (BPP) Kecamatan Punggur berkomitmen untuk memberikan informasi, edukasi, dan layanan penyuluhan kepada masyarakat pertanian di wilayah Kecamatan Punggur dan sekitarnya. Kami berdedikasi untuk meningkatkan kualitas pertanian melalui program-program yang inovatif dan berkelanjutan.</p>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4">
        <h2 id="link-terkait" class="h5">Link Terkait</h2>
        <ul class="list-unstyled" id="list-footer">
          <li><a href="#" id="list-footer-beranda" class="text-dark text-decoration-none">Beranda</a></li>
          <li><a href="#" id="list-footer-tentangkami" class="text-dark text-decoration-none">Tentang Kami</a></li>
          <li><a href="#" id="list-footer-berita" class="text-dark text-decoration-none">Berita</a></li>
          <li><a href="#" id="list-footer-edukasi" class="text-dark text-decoration-none">Edukasi</a></li>
          <li><a href="#" id="list-footer-kegiatan" class="text-dark text-decoration-none">Kegiatan</a></li>
          <li><a href="#" id="list-footer-kontak" class="text-dark text-decoration-none">Kontak</a></li>
        </ul>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4">
        <h2 class="h5">Kontak Kami</h2>
        <p><i class="fas fa-map-marker-alt me-2"></i>Jl. Raya Punggur No.123, Kecamatan Punggur, Lampung</p>
        <p><i class="fas fa-phone-alt me-2"></i>+62 812 3456 7890</p>
        <p><i class="fas fa-envelope me-2"></i>info@bpppunggur.id</p>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom bg-danger text-white text-center py-3">
    <div class="container">
      <p class="mb-0">&copy; 2024 Badan Penyuluhan Pertanian Kecamatan Punggur. All Rights Reserved.</p>
    </div>
  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>