<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password1=md5($_POST['password1']);
	$query1=mysqli_query($con,"select * from users where email='$email'");
	$query2=mysqli_query($con,"select * from vets where email='$email'");
	$num1=mysqli_fetch_array($query1);
	$num2=mysqli_fetch_array($query2);
	if($num1>0){
		mysqli_query($con,"update users set password='$password1' where email='$email'");
		$host=$_SERVER['HTTP_HOST'];
		$extra="forgot-password.php";
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		$_SESSION['errmsg']="Password has been changed successfully.";
		exit();
	}
	else if($num2>0){
		mysqli_query($con,"update vets set password='$password1' where email='$email'");
		$host=$_SERVER['HTTP_HOST'];
		$extra="forgot-password.php";
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		$_SESSION['errmsg']="Password has been changed successfully.";
		exit();
	}
	else{
		$host=$_SERVER['HTTP_HOST'];
		$extra="forgot-password.php";
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		$_SESSION['errmsg']="Caution: Invalid Email ID.";
		exit();
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

  <title>PAWS - Registration</title>
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

  <!-- Main CSS File --> 
  <link href="assets/css/style.css" rel="stylesheet"> 

</head>

<body>

  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Important Links</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Sign Up | Sign In</a></li>
              <li><a href="blog-page.php">Our Blogs</a></li>
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
              <li><a href="../index.php">Home</a></li>
              <li>User Registration</li>
            </ol>
            <h2>Forgot Password</h2>
          </div>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="card-container">
              <div class="card">
                <div class="inner-box" id="card">
                  <div class="card-front">
                    <h2 style="color: #fff; margin-bottom: 55px;">FORGOT PASSWORD</h2>
                    <form method="post" name="changepwd" onSubmit="return valid();">
                      <span style="color:red;">
                        <?php echo htmlentities($_SESSION['errmsg']);?>
                        <?php echo htmlentities($_SESSION['errmsg']="");?>
                      </span>
                      <input type="text" name="email" class="input-box" id="inputemail" placeholder="Email" required>
                      <input type="password" name="password1" class="input-box" id="inputPassword1" placeholder="New Password" required>
                      <input type="password" name="password2" class="input-box" id="inputPassword2" placeholder="Confirm Password" required>
                      <button type="submit" name="submit" class="submit-btn">update</button>
                    </form>
                    <a href="index.php">Back to PAWS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

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

  <!--<div id="preloader"></div>-->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script type="text/javascript">
  	function valid(){
  		if(document.changepwd.password1.value!=document.changepwd.password2.value){
  			alert("Caution: Password and Confirm Password Field do not match.");
  			document.changepwd.password2.focus();
  			return false;
  		}
  		return true;
  	}
  </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

</body>

</html>