<!-- COMPLETE -->

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

  <title>PAWS - Adopt Pet</title>
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
            <li>Adopt Pets</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pets For Adoption</h2>
          <p>Our compassionate and enthusiastic vets are available 24/7 in your service so that your beloved pets can have a healthy life.</p>
        </div>

        <div class="row gy-5">

        <?php
        $query=mysqli_query($con,"select * from pethome where uid!='".$_SESSION['id']."' and status='Not Adopted'");
        while($row=mysqli_fetch_array($query)){
        ?>
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        		<div class="service-item">
        			<div class="img">
        				<a href="pet-details.php?petid=<?php echo htmlentities($row['id']);?>"><img src="../pets/img<?php echo htmlentities($row['id']);?>.1.jpg" class="img-fluid" alt=""></a>
        			</div>
        			<div class="details position-relative">
        				<div class="icon">
        					<i class="bi bi-activity"></i>
        				</div>
        				<a href="pet-details.php?petid=<?php echo htmlentities($row['id']);?>" class="stretched-link">
        					<h3><?php echo htmlentities($row['petName']);?></h3>
        				</a>
                <p><strong>Type:</strong> <?php echo htmlentities($row['petType']);?></p>
        				<p><strong>Age:</strong> <?php echo htmlentities($row['petAge']);?></p>
                <p><strong>Gender:</strong> <?php echo htmlentities($row['petGender']);?></p>
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