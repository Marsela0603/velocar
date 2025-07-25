<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Details - BizLand Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('welcome/img/logo-velocar.png')}}" rel="icon">
  <link href="{{asset('welcome/img/velocar-logo.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('welcome/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('welcome/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('welcome/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('welcome/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('welcome/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('welcome/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@velocar.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(021) 4759 603</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Velocar</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/#about">Tentang Kami</a></li>
            <li><a href="/#services">Pelayanan</a></li>
            <li><a href="/#portfolio">Galeri Kami</a></li>
            <li><a href="/#team">Tim</a></li>
            <li><a href="/#contact">Kontak</a></li>
            <li><a href="{{ url('/peminjaman') }}">Peminjaman</a></li>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" class="btn-login">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="btn-login">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn-daftar">Register</a>
            @endif
            @endauth
            @endif
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Detail Kendaraan</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Beranda</a></li>
            <li class="current">Detail Kendaraan</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="portfolio-details" class="portfolio-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper align-items-center">
                @if($armada->gambar)
                  <div class="swiper-slide">
                    <img src="{{ Storage::url($armada->gambar) }}" alt="{{ $armada->merk }}">
                  </div>
                @endif
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Informasi Kendaraan</h3>
              <ul>
                <li><strong>Armada</strong>: {{ $armada->merk }}</li>
                <li><strong>Jenis Kendaraan</strong>: {{ $armada->jenis_kendaraan->nama }}</li>
                <li><strong>No. Polisi</strong>: {{ $armada->nopol }}</li>
                <li><strong>Tahun Beli</strong>: {{ $armada->thn_beli }}</li>
                <li><strong>Kapasitas Kursi</strong>: {{ $armada->kapasitas_kursi }}</li>
                <li><strong>Rating</strong>: {{ $armada->rating }}</li>
                <li><strong>Biaya</strong>: Rp {{ number_format($armada->biaya, 0, ',', '.') }}</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Deskripsi Kendaraan</h2>
              <p>{{ $armada->deskripsi }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Bergabunglah dengan Newsletter Kami</h4>
            <p>Langganan newsletter kami dan terima berita terbaru tentang produk dan layanan kami!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Request untuk Subscribe Terkirim. Terima Kasih!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="/" class="d-flex align-items-center">
            <span class="sitename">Velocar</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jalan Lenteng Agung Raya No.20</p>
            <p>Kec.Jagakarsa, DKI Jakarta 12640</p>
            <p class="mt-3"><strong>No. Telepon: </strong> <span>(021) 4759 603</span></p>
            <p><strong>Email: </strong> <span>contact@velocar.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="/">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/#about">Tentang Kami</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/#services">Pelayanan</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Pelayanan Kami</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="/#portfolio">Bus</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/#portfolio">Mobil</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/#portfolio">Minibus</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Ikuti Kami</h4>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Velocar</strong> <span>Pelayanan Prima untuk Setiap Perjalanan Anda</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Desain Oleh<a href="https://bootstrapmade.com/">Tim Velocar</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('welcome/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('welcome/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('welcome/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('welcome/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('welcome/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('welcome/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('welcome/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('welcome/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('welcome/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('welcome/js/main.js')}}"></script>

</body>

</html>