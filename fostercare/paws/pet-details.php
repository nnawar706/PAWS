<!-- COMPLETE -->

<?php
session_start();
error_reporting(0);
include('includes/config.php');
$owner = 0;
$petid=intval($_GET['petid']);
$cmd1 = mysqli_query($con,"select uid from pethome where id='$petid'");
while($r=mysqli_fetch_array($cmd1)){
  $owner = $r['uid'];
}
if(isset($_POST['apply'])){
  $sql=mysqli_query($con,"insert into adoption(applicantid,ownerid,petid) values('".$_SESSION['id']."','$owner','$petid')");
  if($sql){
    echo "<script>alert('You have applied to adopt this pet!');</script>";
  }
}
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

  <title>PAWS - Pet Description</title>
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
            <li><a href="adopt-pet.php">Pets For Adoption</a></li>
            <li>Pet Information</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

        	<?php
        	$query1=mysqli_query($con,"select * from pethome where id='$petid'");
        	while($row=mysqli_fetch_array($query1)){
        	?>

          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../pets/img<?php echo htmlentities($row['id']);?>.1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="../pets/img<?php echo htmlentities($row['id']);?>.2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="../pets/img<?php echo htmlentities($row['id']);?>.3.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="../vaccineCard/vaccine<?php echo htmlentities($row['id']);?>.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>Owner Information</h3>
              <?php
              $userid=$row['uid'];
              $query2=mysqli_query($con,"select * from users where id='$userid'");
              while($row2=mysqli_fetch_array($query2)){
              ?>
              <ul>
                <li><strong>Name</strong>: <?php echo htmlentities($row2['name']);?></li>
                <li><strong>Email</strong>: <?php echo htmlentities($row2['email']);?></li>
                <li><strong>Contact</strong>: <?php echo htmlentities($row2['contact']);?></li>
              </ul>
              <?php } ?>
            </div>
            <div class="portfolio-description">
              <h2>Some words about <?php echo htmlentities($row['petName']);?>-</h2>
              <p><strong>Type:</strong> <?php echo htmlentities($row['petType']);?></p>
              <p><strong>Age:</strong> <?php echo htmlentities($row['petAge']);?></p>
              <p><strong>Gender:</strong> <?php echo htmlentities($row['petGender']);?></p>
              <p><strong>Posted On:</strong> <?php echo htmlentities($row['time']);?></p>
              <p>
                <?php echo htmlentities($row['petDescription']);?>
              </p>
              <form class="register-form" role="form" method="post"><button type="submit" name="apply" class="btn-upper btn update-button" style="width: 30%; height: 40px; font-size: 18px; background-color: #5697d0; margin-top: 20px; color: #fff;">Apply to Adopt</button></form>
              
            </div>
          </div>

        </div>

      </div>
  <?php } ?>
    </section><!-- End Portfolio Details Section -->

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