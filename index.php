<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi - POSYANDU</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/image/Favicon.png" rel="icon">
  <link href="assets/image/Favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Login CSS File -->
  <link rel="stylesheet" href="assets/css/login.css">


</head>

<body>
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>SIMPo<span>+</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#footer">Contact</a></li>
          <li><a href=""></a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

<!-- Hero Section -->
<section id="hero" class="hero">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Sistem Informasi <span>POSYANDU</span></h2>
        <p>seperangkat alat penyiapan data untuk menghasilkan informasi kesehatan mengenai kegiatan, kondisi, dan perkembangan yang terjadi di setiap Posyandu.</p>
        <div class=" d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started">Get Started</a>
          <button class="d-flex align-items-center continue-application">
              <div>
                  <div class="pencil"></div>
                  <div class="folder">
                      <div class="top">
                          <svg viewBox="0 0 24 27">
                              <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                          </svg>
                      </div>
                      <div class="paper"></div>
                  </div>
              </div>
              Log In
          </button>
        </div>

        <div class="row gy-5 wrapper ">
          <div class="container justify-center">
                <span class="icon-close"><i class="bi bi-x"></i></span>
            <div class="form-box login">
                <h2>Log in</h2>  
                    <p>Login dengan menggunakan akun yang sudah terdaftar.</p>
                <form action="assets/php/login_proses.php" method="post">
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-person-fill"></i></span>
                        <input type="text" name="nikortu" required>
                        <label>NIK ORTU</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <button type="submit" class="btn" name="login">Login</button>
                </form>
            </div>
        </div>
      </div>
      </div>
      <div class="col-lg-6 order-1 oder-lg-2">
        <img src="assets/image/hero.svg" alt="" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
      </div>
    </div>
  </div>

  <div class="icon-boxes position-relative">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-3 m-lx-2 " data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box ml-lg-2">
            <div class="icon"><i class="bi bi-capsule"></i></div>
            <h4 class="title"><a href="#vitamin" class="stretched-link">Vitamin</a></h4>
          </div>
        </div>
        <!-- Icon -->

        <div class="col-xl-3 col-md-3 m-lx-2" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-prescription2"></i></div>
            <h4 class="title"><a href="#gizi" class="stretched-link">Gizi</a></h4>
          </div>
        </div>
        <!-- icon -->
        
        <div class="col-xl-3 col-md-3 m-lx-2" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-clipboard2-pulse-fill"></i></div>
            <h4 class="title"><a href="#penimbangan" class="stretched-link">Penimbangan</a></h4>
          </div>
        </div>
        <!-- icon -->

        <div class="col-xl-3 col-md-3 m-lx-2" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-shield-plus"></i></div>
            <h4 class="title"><a href="#imunisasi" class="stretched-link">Imunisasi</a></h4>
          </div>
        </div>
        <!-- icon -->
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->

  <main id="main">
    <!-- ===== About Us ====== -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Tentang Kami</h2>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <h3>Layanan Sistem Informasi Posyandu Online</h3>
              <img src="assets/image/hero-img2.svg" alt="">
            </div>
            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                  Posyandu sangatlah penting untuk balita karena memang kami di tuntut untuk mengontrol pertumbuhan dan kesehatan mereka.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>Penimbangan, bertujuan untuk mengetahui atau deteksi dini apakah bayi /balita sakit atau tidak, kelengkapan Imunisasi dan mendapatkan penyuluhan gizi.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Imunisasi, upaya pencegahan penyakit menular dengan memberikan “vaksin” sehingga terjadi imunitas (kekebalan) terhadap penyakit tersebut. </li>
                  <li><i class="bi bi-check-circle-fill"></i>Vitamin Dan Gizi, menunjang pertumbuhan dan perkembangan balita. Apabila status gizi balita tidak tercukupi, maka dapat terjadi komplikasi pada kesehatannya.</li>
                </ul>
                <p>Data balita yang sudah terdaftar pada website posyandu.</p>

                <div class="position-relative mt-2">
                  <div id="stats-counter" class="stats-counter">
                    <div class="container" data-aos="fade-up">

                      <div class="row gy-4 align-items-center">
                        <div class="col-lg-auto ">

                          <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="609" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Penimbangan</strong> Pencatatan penimbangan yang sudah dilakukan
                            </p>
                          </div> 
                          <!-- End Stats Item -->

                          <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="269" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Imunisasi</strong> Melakukan Imunisasi Rutin pada Anak
                            </p>
                          </div> 
                          <!-- End Stats Item -->

                          <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="896" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Vitamin Dan Gizi</strong> Pemberian Vitamin yang rutin pada Anak
                            </p>
                          </div> 
                          <!-- End Stats Item -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- End About Us -->
    

    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Tentang Kegiatan Kami</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 col-md-6">
            <div class="service-item  position-relative">
              <div id="vitamin" class="icon">
                <i class="bi bi-capsule"></i>
              </div>
              <h3>Vitamin</h3>
              <p>Anak-anak yang memenuhi kebutuhan vitamin harian mereka dapat memiliki sistem kekebalan tubuh yang kuat, meningkatkan konsentrasi dan daya ingat, serta mencegah berbagai masalah kesehatan seperti anemia, masalah kulit, dan masalah penglihatan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6">
            <div class="service-item  position-relative">
              <div id="gizi" class="icon">
                <i class="bi bi-prescription2"></i>
              </div>
              <h3>Gizi</h3>
              <p>Anak-anak yang mendapatkan asupan gizi yang cukup dapat memiliki sistem kekebalan tubuh yang kuat, meningkatkan konsentrasi dan daya ingat, serta mencegah berbagai masalah kesehatan seperti obesitas, diabetes, dan masalah kesehatan lainnya.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6">
            <div class="service-item position-relative">
              <div id="penimbangan" class="icon">
                <i class="bi bi-clipboard2-pulse-fill"></i>
              </div>
              <h3>Penimbangan</h3>
            <p>bertujuan untuk mengetahui atau deteksi dini apakah bayi /balita sakit atau tidak, kelengkapan Imunisasi dan mendapatkan penyuluhan gizi.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6">
            <div class="service-item position-relative">
              <div id="imunisasi" class="icon">
                <i class="bi bi-shield-plus"></i>
              </div>
              <h3>Imunisasi</h3>
              <p>upaya pencegahan penyakit menular dengan memberikan “vaksin” sehingga terjadi imunitas (kekebalan) terhadap penyakit tersebut.</p>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- End Our Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>POSYANDU</span>
          </a>
          <p>sebuah sistem yang bertujuan untuk mempermudah pengelolaan data dan informasi terkait kegiatan posyandu, mulai dari pendaftaran peserta hingga pengolahan data kesehatan.</p>
          <div class="social-links mt-4 col-sm-6">
            <a href="tel:+62 22299 22"><i class="bi bi-telephone-fill"></i></a><strong>Phone : </strong>+62 8762-633-332
            <a href="mailto:ingpo@gmail.com" class="mt-4"><i class="bi bi-envelope"></i></a><strong>Email : </strong>SIMPo@gmail.com<br>
          </div>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex mt-2">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <iframe style="background-color: white; padding: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.3626164393554!2d114.59283029640176!3d-3.2943128297711333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4230a0b2b4147%3A0xf77d2d78f8af24d7!2sSMK%20ISFI%20Banjarmasin!5e0!3m2!1sid!2sid!4v1676987917670!5m2!1sid!2sid" width="150%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>