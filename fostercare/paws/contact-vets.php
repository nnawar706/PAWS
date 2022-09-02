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

  <title>PAWS - Contact Vets</title>
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
      <a href="homepage.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
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
            <li>Contact a Vet</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Vets</h2>
          <p>Our compassionate and enthusiastic vets are available 24/7 in your service so that your beloved pets can have a healthy life.</p>
        </div>

        <div class="row gy-5">

        <?php
        $query=mysqli_query($con,"select * from vets");
        while($row=mysqli_fetch_array($query)){
        ?>
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        		<div class="service-item">
        			<div class="img">
        				<img src="../vets/img<?php echo htmlentities($row['id']);?>.jpg" class="img-fluid" alt="">
        			</div>
        			<div class="details position-relative">
        				<div class="icon">
        					<i class="bi bi-activity"></i>
        				</div>
        				
        					<h3><?php echo htmlentities($row['name']);?></h3>
        				
        				<p><strong>Email:</strong> <?php echo htmlentities($row['email']);?></p>
                <p><strong>Contact:</strong> <?php echo htmlentities($row['contact']);?></p>
                <p><strong>Registered On:</strong> <?php echo htmlentities($row['regTime']);?></p>
                <a href="../pdfs/resume<?php echo htmlentities($row['id']);?>.pdf" target="_blank">View Resume</a><br>
                <button type="submit" name="submit" class="btn-upper btn update-button" style="height: 40px; font-size: 13px; background-color: #5697d0; margin-top: 20px; color: #fff;"><a href="get-consultation.php" style="text-decoration: none; color: #fff;">Book Appointment</a></button>
        			</div>
        		</div>
        	</div><!-- End Service Item -->
                <?php } ?>
        </div>

      </div>
    </section><!-- End Services Section -->

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