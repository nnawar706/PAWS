<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    .accordion{
      margin: 20px auto;
      display: flex;
      flex-direction: column;
      gap: 30px;
    }
    .item{
      border-radius: 5px;
      box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.2);
      display: grid;
      grid-template-columns: auto 1fr auto;
      gap: 30px;
      align-items: center;
      padding: 20px;
      cursor: pointer;
    }
    .hidden-box{
      grid-column: 2/3;
      display: none;
    }
    .active{
      position: relative;
    }
    .active::after{
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      border-top: 3px solid #5697d0;
      animation: animate 2s linear forwards;
    }
    @keyframes animate{
      0%{
        width: 0;
      }
      100%{
        width: 100%;
      }
    }
    .active .hidden-box{
      display: block;
    }
  </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PAWS - Vet Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pawicon.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/icons/css/font-awesome.css" rel="stylesheet">
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

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/logo.png" class="img-fluid animated">
      <?php if(strlen($_SESSION['signin_vet'])){
      ?>
      <h2>Welcome, <span><?php echo htmlentities($_SESSION['username_vet']);?></span>!</h2>
      <?php } ?>
      <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
      <div class="d-flex">
        <a href="vet-acc.php" class="btn-get-started scrollto" style="margin-right: 20px;">My Profile</a>
        <a href="signout-vet.php" class="btn-get-started scrollto">Sign Out</a>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section> 
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Consultations</h2>
          <p>Our compassionate and enthusiastic vets are available 24/7 in your service so that your beloved pets can have a healthy life.</p>
        </div>

        <div class="accordion">
          <div class="item">
            <p class="number">01</p><h4>Online Consultation</h4>
            <div class="iconOpen">
              <i class="fa fa icon-plus-sign"></i>
            </div>
            <div class="iconClose">
              <i class="fa fa icon-minus-sign"></i>
            </div>
            <div class="hidden-box">
              <!-- Google Calendar Appointment Scheduling begin -->
              <iframe src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ1OT8CqdDcOyOg5V7kMT06eJsJOOjsNJE2fPc_gtVqDhMFP1LFbF4Pr8YlXz3LdOhKca8sL1MKy?gv=true" style="border: 0" width="100%" height="600" frameborder="0"></iframe>
              <!-- end Google Calendar Appointment Scheduling -->
            </div>
          </div>

          <div class="item">
            <p class="number">02</p><h4>Offline Consultation</h4>
            <div class="iconOpen">
              <i class="fa fa icon-plus-sign"></i>
            </div>
            <div class="iconClose">
              <i class="fa fa icon-minus-sign"></i>
            </div>
            <div class="hidden-box">
              <!-- Google Calendar Appointment Scheduling begin -->
              <iframe src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ1OT8CqdDcOyOg5V7kMT06eJsJOOjsNJE2fPc_gtVqDhMFP1LFbF4Pr8YlXz3LdOhKca8sL1MKy?gv=true" style="border: 0" width="100%" height="600" frameborder="0"></iframe>
              <!-- end Google Calendar Appointment Scheduling -->
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->


    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Some Words From <em>The Owner,</em> Nafisa Nawer</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn align-self-start" href="#">Call To Action</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/cta.jpg" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->

    


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
        </div>

      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include('includes/footer.php');?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script type="text/javascript">
    const itemDiv = document.getElementsByClassName('item');
    const openIcon = document.getElementsByClassName('iconOpen');
    const closeIcon = document.getElementsByClassName('iconClose');
    for(let i=0;i<itemDiv.length;i++){
      closeIcon[i].style.display = "none";
      itemDiv[i].addEventListener("click",()=>{
        const result = itemDiv[i].classList.toggle("active");
        if(result){
          closeIcon[i].style.display = "block";
          openIcon[i].style.display = "none";
        }
        else{
          closeIcon[i].style.display = "none";
          openIcon[i].style.display = "block";
        }
      });
    }
  </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main2.js"></script>

</body>

</html>