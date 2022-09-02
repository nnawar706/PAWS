<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit'])){
	$uid=$_POST['uid'];
	$petName=$_POST['petName'];
	$petAge=$_POST['petAge'];
	$petGender=$_POST['petGender'];
	$petType=$_POST['petType'];
	$petDescription=$_POST['petDescription'];

	$img1=$_FILES['petImg1']['name'];
	$img1_type=$_FILES['petImg1']['type'];
	$img1_size=$_FILES['petImg1']['size'];
	$img1_tem_loc=$_FILES['petImg1']['tmp_name'];
	$img1_store="../pets/".$img1;
	move_uploaded_file($img1_tem_loc, $img1_store);

	$img2=$_FILES['petImg2']['name'];
	$img2_type=$_FILES['petImg2']['type'];
	$img2_size=$_FILES['petImg2']['size'];
	$img2_tem_loc=$_FILES['petImg2']['tmp_name'];
	$img2_store="../pets/".$img2;
	move_uploaded_file($img2_tem_loc, $img2_store);

	$img3=$_FILES['petImg3']['name'];
	$img3_type=$_FILES['petImg3']['type'];
	$img3_size=$_FILES['petImg3']['size'];
	$img3_tem_loc=$_FILES['petImg3']['tmp_name'];
	$img3_store="../pets/".$img3;
	move_uploaded_file($img3_tem_loc, $img3_store);

	$img4=$_FILES['vaxImg']['name'];
	$img4_type=$_FILES['vaxImg']['type'];
	$img4_size=$_FILES['vaxImg']['size'];
	$img4_tem_loc=$_FILES['vaxImg']['tmp_name'];
	$img4_store="../vaccineCard/".$img4;
	move_uploaded_file($img4_tem_loc, $img4_store);

	$sql1=mysqli_query($con,"insert into pethome(uid,petName,petAge,petGender,petType,petDescription,petImg1,petImg2,petImg3,vaxImg) values('$uid','$petName','$petAge','$petGender','$petType','$petDescription','$img1','$img2','$img3','$img4')");
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
            <li>Find Home for Pets</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Pet Application</h2>
        </div>

      </div>

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3 style="margin-bottom: 20px;">Find Home</h3>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <a href="find-home.php"><h4>Apply For Home</h4></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <a href="app-result.php"><h4>Your Applications</h4></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <a href="applicant.php"><h4>See Applicants</h4></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <a href="app-dlt.php"><h4>Delete Application</h4></a>
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
                  <input type="text" class="form-control unicase-form-control text-input" id="petname" name="petName" required="required">
                </div>
                <div class="col-md-6 form-group">
                  <label class="info-title" for="Age">Pet Age</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="age" name="petAge" required="required">
                </div>
              </div>

              <div class="row" style="margin: 10px 0;">
              	<div class="col-md-6 form-group">
                  <label class="info-title" for="exampleInputEmail1">Pet Gender</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="petGender" name="petGender" required="required">
                </div>
                <div class="col-md-6 form-group">
                  <label class="info-title" for="Contact No.">Type of Pet</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="petType" name="petType" required="required">
                </div>
              </div>

              <div class="row" style="margin: 10px 0;">
              	<div class="col-md-12 form-group">
                  <label class="info-title" for="description">Description (Word Limit: 50)</label>
                  <input type="text" class="form-control unicase-form-control text-input" id="petDescription" name="petDescription" required="required" style="height: 80px;">
                </div>
              </div>

              <div class="row" style="margin: 10px 0;">
                <div class="col-md-12 form-group">
                  <label class="info-title" for="Image1">Upload Image 1 (png, jpg)</label>
                  <input type="file" class="form-control unicase-form-control text-input" id="petImg1" name="petImg1" required="required">
                </div>
              </div>

              <div class="row" style="margin: 10px 0;">
                <div class="col-md-12 form-group">
                  <label class="info-title" for="Image2">Upload Image 2 (png, jpg)</label>
                  <input type="file" class="form-control unicase-form-control text-input" id="petImg2" name="petImg2" required="required">
                </div>
              </div>

              <div class="row" style="margin: 10px 0;">
                <div class="col-md-12 form-group">
                  <label class="info-title" for="Image3">Upload Image 3 (png, jpg)</label>
                  <input type="file" class="form-control unicase-form-control text-input" id="petImg3" name="petImg3" required="required">
                </div>
              </div>

              <div class="row" style="margin: 10px 0;">
                <div class="col-md-12 form-group">
                  <label class="info-title" for="vax">Upload Vaccination Card (png, jpg)</label>
                  <input type="file" class="form-control unicase-form-control text-input" id="vaxImg" name="vaxImg" required="required">
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