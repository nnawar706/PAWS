<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    html{
      -ms-overflow-style: none; /* IE and Edge */
      scrollbar-width: none;
    }
    html::-webkit-scrollbar{
      display: none;
    }
    body{
      -ms-overflow-style: none; /* IE and Edge */
      scrollbar-width: none;
    }
    body::webkit-scrollbar {
      display: none;
    }
  </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PAWS - Medicines</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pawicon.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/variables.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <img style="min-height: 80px;" src="assets/img/logo.png" alt="">
      </a>
    </div>
  </header><!-- End Header -->

  <main id="main" style="padding-top: 50px;">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="homepage.php">Home</a></li>
            <li>Pet Medications</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="https://en.wikipedia.org/wiki/Acepromazine" class="stretched-link">Acepromazine</a></h4>
              <p>Sedative, Tranquilizer and Antiemetic</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="https://en.wikipedia.org/wiki/Albendazole" class="stretched-link">Albendazole</a></h4>
              <p>Anti-helminthic</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="https://en.wikipedia.org/wiki/Alprazolam" class="stretched-link">Alprazolam</a></h4>
              <p>Benzodiazepine used as an Anxiolytic and Tranquilizer</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="https://en.wikipedia.org/wiki/Altrenogest" class="stretched-link">Altrenogest</a></h4>
              <p>Used to synchronizes estrus</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="https://en.wikipedia.org/wiki/Amantadine" class="stretched-link">Amantadine</a></h4>
              <p>Analgesic for Chronic pain</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="https://en.wikipedia.org/wiki/Amitriptyline" class="stretched-link">Amitriptyline</a></h4>
              <p>Tricyclic Antidepressant used to treat separation anxiety, excessive grooming dogs and cats</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="https://en.wikipedia.org/wiki/Amlodipine" class="stretched-link">Amlodipine</a></h4>
              <p>Calcium channel blocker used to decrease blood pressure</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="https://en.wikipedia.org/wiki/Bethanechol" class="stretched-link">Bethanechol</a></h4>
              <p>Stimulates bladder contractions, tranquilizer, makes the patient feel no pain</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="https://en.wikipedia.org/wiki/Buprenorphine" class="stretched-link">Buprenorphine</a></h4>
              <p>Narcotic for pain relief in cats after surgery</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

  </main><!-- End #main -->

  <?php include('includes/footer.php');?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main2.js"></script>

</body>

</html>