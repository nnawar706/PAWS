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

  <title>Blogs - PAWS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pawicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          
          <li class="dropdown"><a href="#"><span>Important Links</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="signup.php">Sign Up/Sign In</a></li>
              <li><a href="blog-page.php">Our Blogs</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main" style="padding-top: 70px;">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container-fluid">

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ol>
              <li><a href="index.php">Home</a></li>
              <li>Blogs</li>
            </ol>
            <h2>Our Blogs</h2>
          </div>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>blogs</h2>
          <h3>Connect with our <span>Blogs</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row portfolio-container justify-content-center">

          <div class="col-xl-10">
            <div class="row">

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/blog1bg.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>What to feed you cat?</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/blog1bg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="What to feed you cat?"><i class="bx bx-plus"></i></a>
                      <a href="../blogs/blog1/index.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/blog2bg.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>How to train your dog?</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/blog2bg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="How to train your dog?"><i class="bx bx-plus"></i></a>
                      <a href="../blogs/blog2/index.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php include('includes/footer.php');?>
 
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>