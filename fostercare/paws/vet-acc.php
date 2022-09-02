<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['update'])){
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $nid=$_POST['nid'];
  $query = mysqli_query($con, "update vets set email='$email',contact='$contact' where nid='$nid'");
  if($query){
    echo "<script>alert('Your profile has been updated.');</script>";
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

  <title>PAWS - My Profile</title>
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
            <li><a href="homepage-vet.php">Home</a></li>
            <li>My Profile</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Vet Information</h2>
        </div>

      </div>

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3 style="margin-bottom: 20px;">Vet Account</h3>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <a href="vet-acc.php"><h4>Vet Profile</h4></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <a href="vet-resume.php"><h4>Resume</h4></a>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-5">
            
            <form class="register-form" role="form" method="post">
              <?php
              $query = mysqli_query($con, "select * from vets where id='".$_SESSION['id_vet']."'");
              while($row = mysqli_fetch_array($query)){
              ?>
              <div class="row" style="margin: 10px 0;">
                <div class="col-md-12 form-group">
                  <label class="info-title" for="name">Name</label>
                  <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row['name'];?>" id="name" name="name" readonly>
                </div>  
              </div>

              <div class="row" style="margin: 10px 0;">
                <div class="col-md-6 form-group">
                  <label class="info-title" for="Contact No.">Contact No.</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contact" required="required" value="<?php echo $row['contact'];?>">
                </div>

                <div class="col-md-6 form-group">
                  <label class="info-title" for="exampleInputEmail1">Email Address</label>
                  <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email" value="<?php echo $row['email'];?>" required="required">
                </div>
              </div>

              <div class="row" style="margin: 0 0.5px;">
                <div class="col-md-6 form-group">
                  <label class="info-title" for="Current Address">National ID</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="nid" name="nid" value="<?php echo $row['nid'];?>" readonly>
                </div>
                <div class="col-md-6 form-group">
                  <label class="info-title" for="RegTime">Registration Time</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="regTime" name="regTime" value="<?php echo $row['regTime'];?>" readonly>
                </div>
              </div>
              
              <button type="submit" name="update" class="btn-upper btn update-button" style="width: 25%; height: 40px; font-size: 18px; background-color: #5697d0; margin-top: 20px; margin-left: 38%; color: #fff;">Update</button>
            </form>
            <?php } ?>
          </div><!-- End Contact Form -->

          <div class="col-lg-2">
            <?php
            $sql = mysqli_query($con, "select image from appliedvets where nid='".$_SESSION['nid']."'");
            while($row1 = mysqli_fetch_array($sql)){
              ?>
              <img src="../vets/<?php echo $row1['image'];?>" width="250" height="250">
            <?php } ?>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

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