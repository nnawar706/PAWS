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

  <title>PAWS-Homepage</title>
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Important Links</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="signup.php">Sign Up | Sign In</a></li>
              <li class="dropdown"><a href="#"><span>Vets</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="vet-application.php">Register as a Vet</a></li>
                  <li><a href="vet-signup.php">Sign Up | Sign In</a></li>
                </ul>
              </li>
              <li><a href="blog-page.php">Our Blogs</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>PAWS</span></h2>
              <p class="animated fadeInUp">Care They Need, Love They Deserve!</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>PAWS</span></h2>
              <p class="animated fadeInUp">Care They Need, Love They Deserve!</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>PAWS</span></h2>
              <p class="animated fadeInUp">Care They Need, Love They Deserve!</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Learn More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=YHOYDjJ1ta4" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>A place for your pet to Explore!</h3>
            <p>Because choosing a boarding facility can be a complex and unpleasant process for pet owners, Ethical Pet Boarding is an important aspect of our pet care program. PAWS has four years of expertise, so you can rest assured that when your pet is in our care, it will be safe, and we will love it as if it were our own child.</p>

            <div class="icon-box">
              <div class="icon"><i class="ri-pie-chart-line"></i></div>
              <h4 class="title"><a href="">Temporary Home</a></h4>
              <p class="description">While you are away, we take extra care of your pet. You can relax and leave your pet in our care while you attend to urgent matters.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Healthy Lifestyle</a></h4>
              <p class="description">Here at PAWS, we provide healthy lifestyle to your pets. Our guests follow a healthy routine for playing, eating, and sleeping.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Pet Adoption</a></h4>
              <p class="description">We cordially invite you to visit PAWS, one of the best practices in animal sheltering, with a focus on life-saving pet adoption.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container-fluid">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pets</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Services</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-shape-line"></i></div>
                <h4 class="title"><a href="">Foster Care</a></h4>
                <p class="description">PAWS provides the gentle, consistent support our pets need to feel comfortable and get healthy.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-shape-line"></i></div>
                <h4 class="title"><a href="">Permanent Home</a></h4>
                <p class="description">We do everything we can to make our pets’ stay with us as comfortable as possible, nothing can compare to a loving home environment.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-shape-line"></i></div>
                <h4 class="title"><a href="">Pet Adoption</a></h4>
                <p class="description">Hundreds of adoption posts are available at PAWS from which you can meet your desired pet.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-shape-line"></i></div>
                <h4 class="title"><a href="">Vets Appointment</a></h4>
                <p class="description">Our compassionate and enthusiastic vets are available 24/7 in your service.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-shape-line"></i></div>
                <h4 class="title"><a href="">Pet Foods & Accessories</a></h4>
                <p class="description">All types of pet foods and accessories are available at PAWS.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-shape-line"></i></div>
                <h4 class="title"><a href="">Pharmaceuticals</a></h4>
                <p class="description">PAWS allows you to learn about pet medicines before applying on your pets.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p>At PAWS, you not only get foster services but also you get to consult professional vets at your convenient times. PAWS brings all types of pet foods for your beloved pet. Sign up now to get all the services!</p>
          <a class="cta-btn" href="signup.php">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Guests</span></h3>
          <p>PAWS provides the gentle, consistent support the guests need to feel comfortable and get healthy.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Dogs</li>
              <li data-filter=".filter-card">Cats</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container justify-content-center">

          <div class="col-xl-10">
            <div class="row">

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Max</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Max"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Coco</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Coco"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Axel</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Axel"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Halley</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Halley"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Pororo</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pororo"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Lotus</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lotus"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Dolphin</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dolphin"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Chloe</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Chloe"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Cooper</h4>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Cooper"><i class="bx bx-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Testimonials</h2>
          <h3>What They <span>Are Saying</span> About Us</h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">

            <div class="row">

              <div class="col-lg-6">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    The best cat foster home I’ve come across! Bushra apu is an amazing person with immense knowledge about everything cat related! I left my fur baby with her for a week and I got way more than I expected!
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4 mt-lg-0">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I would highly recommend PAWS foster service to anyone who is looking for a wholesome and loving foster parent and home. They are very responsive, considerate. They also helped me vaccinate and spay my cat.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    It seemed they are all experienced in what they are doing and followed all the standard safety procedures very well. They took our cat and completed the surgery in time. We are very happy with the service.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I would highly recommend PAWS foster service to anyone who is looking for a wholesome and loving foster parent and home. They are very responsive, considerate.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    One of the pet care and vet services available in Dhaka. The place is moderately clean and pretty equipped. People working here seems cooperative and sensitive towards the pet. They also provide transportation services for the pets.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                  <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
                  <h3>Emily Harison</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    The place is very well kept and clean. The doctor informed us the procedure and the risks involved in it. It seemed they are all experienced in what they are doing and followed all the standard safety procedures very well.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hard Working <span>Team</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member">
                  <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Walter White</h4>
                      <span>Chief Executive Officer</span>
                    </div>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                <div class="member">
                  <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sarah Jhonson</h4>
                      <span>Product Manager</span>
                    </div>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                <div class="member">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>William Anderson</h4>
                      <span>CTO</span>
                    </div>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                <div class="member">
                  <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Amanda Jepson</h4>
                      <span>Senior Veteran</span>
                    </div>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Get In Touch With <span>Us</span></h3>
          <p>For any kind of query, please send us a message. We will get back to you shortly.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-6">

                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4>Address</h4>
                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4>Call Us</h4>
                    <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4>Email Us</h4>
                    <p>paws@example.com<br>paws_info@example.com</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-time-five"></i>
                    <h4>Working Hours</h4>
                    <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                  </div>

                </div>

              </div>

              <div class="col-lg-6">
                <form action="" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label for="email">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" rows="8" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter to get exciting news about pets.</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Foster Care</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Find Pet Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Pet Adoption</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Vet's Appointment</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Pharmaceuticals</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  A108 Adam Street <br>
                  New York, NY 535022<br>
                  United States <br><br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> paws_info@example.com<br>
                </p>

              </div>

              <div class="col-lg-3 col-md-6 footer-info">
                <h3>About PAWS</h3>
                <p>PAWS has four years of expertise, so you can rest assured that when your pet is in our care, it will be safe, and we will love it as if it were our own child.</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PAWS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.facebook.com/nnawar706">CodeArc</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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