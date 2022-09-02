<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit'])){
  $uid=$_POST['uid'];
  $name=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $type=$_POST['type'];
  $petFrom=$_POST['petFrom'];
  $petTo=$_POST['petTo'];

  $vax=$_FILES['vax']['name'];
  $vax_type=$_FILES['vax']['type'];
  $vax_size=$_FILES['vax']['size'];
  $vax_tem_loc=$_FILES['vax']['tmp_name'];
  $vax_store="../vaccineCard/".$vax;
  move_uploaded_file($vax_tem_loc, $vax_store);

  $sql1=mysqli_query($con,"insert into foster(uid,petName,petAge,petGender,petType,vax,fromdt,todt) values('$uid','$name','$age','$gender','$type','$vax','$petFrom','$petTo')");
  if($sql1){
    echo "<script>alert('Congratulations! Your application has been successfully added.');</script>";
  }
  else{
    echo "<script>alert('Caution: Something went wrong. Please try again.');</script>";
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

  <title>PAWS - Pet Application</title>
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
            <li>Foster Care</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Foster Care Application</h2>
        </div>

      </div>

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3 style="margin-bottom: 20px;">Foster Care</h3>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <a href="foster-care.php"><h4>Fill Up Application</h4></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <a href="result-app.php"><h4>Application Result</h4></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <a href="dlt-app.php"><h4>Delete Application</h4></a>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <?php
            $query = mysqli_query($con, "select * from users where id='".$_SESSION['id']."'");
            while($row = mysqli_fetch_array($query)){
          ?>

          <div class="col-lg-8">
            <form class="register-form" role="form" method="post" enctype="multipart/form-data">
            	<div class="row" style="margin: 10px 0;">
                <div class="col-md-6 form-group">
                  <label class="info-title" for="name">User ID</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="uid" name="uid" value="<?php echo $row['id'];?>" readonly>
                </div>
              </div>

              <?php } ?>

              <div class="row" style="margin: 10px 0;">
              	<div class="col-md-6 form-group">
                  <label class="info-title" for="petName">Pet Name</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="petname" name="name" required="required">
                </div>
                <div class="col-md-6 form-group">
                  <label class="info-title" for="Age">Pet Age</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="age" name="age" required="required">
                </div>
              </div>

              <div class="row" style="margin: 10px 0;">
              	<div class="col-md-6 form-group">
                  <label class="info-title" for="exampleInputEmail1">Pet Gender</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="petGender" name="gender" required="required">
                </div>
                <div class="col-md-6 form-group">
                  <label class="info-title" for="Contact No.">Type of Pet</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="petType" name="type" required="required">
                </div>
              </div>

              <div class="row" style="margin: 10px 0;">
              	<div class="col-md-6 form-group">
                  <label class="info-title" for="from">From</label>
                  <input type="datetime-local" class="form-control unicase-form-control text-input" id="petDescription" name="petFrom" required="required">
                </div>
                <div class="col-md-6 form-group">
                  <label class="info-title" for="to">To</label>
                  <input type="datetime-local" class="form-control unicase-form-control text-input" id="petDescription" name="petTo" required="required">
                </div>
              </div>

              <div class="row" style="margin: 10px 0;">
                <div class="col-md-12 form-group">
                  <label class="info-title" for="vax">Upload Vaccination Card (png, jpg)</label>
                  <input type="file" class="form-control unicase-form-control text-input" id="vaxImg" name="vax" required="required">
                </div>
              </div>
              
              <button type="submit" name="submit" class="btn-upper btn update-button" style="width: 15%; height: 40px; font-size: 18px; background-color: #5697d0; margin-top: 20px; margin-left: 40%; color: #fff;">Submit</button>
            </form>
          </div><!-- End Contact Form -->
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