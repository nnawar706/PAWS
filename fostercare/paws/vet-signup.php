<!-- COMPLETE -->

<?php
session_start();
error_reporting(0);
include('includes/config.php');

// Vet Sign In
if(isset($_POST['signin'])){
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $query = mysqli_query($con,"select * from vets where email='$email' and password='$password'");
  $num = mysqli_fetch_array($query);
  if($num>0){
    $_SESSION['signin_vet'] = $_POST['email'];
    $_SESSION['id_vet'] = $num['id'];
    $_SESSION['nid'] = $num['nid'];
    $_SESSION['username_vet'] = $num['name'];
    $uip = $_SERVER['REMOTE_ADDR'];
    $status = 1;
    $log = mysqli_query($con,"insert into vetlog(email,vetip,status) values('".$_SESSION['signin_vet']."','$uip','$status')");
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    $extra = "homepage-vet.php";
    header("location:http://$host$uri/$extra");
    exit();
  }
  else{
    $email=$_POST['email'];
    $uip=$_SERVER['REMOTE_ADDR'];
    $status=0;
    $log=mysqli_query($con,"insert into vetlog(email,userip,status) values('$email','$uip','$status')");
    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    $extra="vet-signup.php";
    header("location:http://$host$uri/$extra");
    $_SESSION['errmsg'] = "Invalid Email or Password. Please try again";
    exit();
  }
}

// Vet Sign Up
if(isset($_POST['submit'])){
	$nid=$_POST['nid'];
	$query1=mysqli_query($con,"select * from appliedvets where nid='$nid'");
	$num=mysqli_fetch_array($query1);
	if($num>0){
		$val='Approved';
		if($num['status']==$val){
			$name=$_POST['name'];
			$email = $_POST['email'];
			$contact = $_POST['contact'];
			$nid=$_POST['nid'];
			$password = md5($_POST['password']);
			$query2=mysqli_query($con,"insert into vets(name,email,contact,nid,password) values('$name','$email','$contact','$nid','$password')");
			if($query2){
				echo "<script>alert('Congratulations! You have successfully registered as a vet!');</script>";
			}
		}
		else{
			echo "<script>alert('Caution: You cannot sign up since your application has not been accepted yet. Please check the result before signing up.');</script>";
		}
	}
	else{
		echo "<script>alert('Caution: You have to fill up the vet application form first.');</script>";
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

  <title>PAWS - Vet Sign Up|Sign In</title>
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

  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Important Links</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Sign Up/Sign In</a></li>
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
              <li>Vets Registration</li>
            </ol>
            <h2>Sign Up | Sign In</h2>
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
                    <h2 style="color: #fff; margin-bottom: 55px;">SIGN IN</h2>
                    <form method="post">
                      <span style="color:red;">
                        <?php echo htmlentities($_SESSION['errmsg']);?>
                        <?php echo htmlentities($_SESSION['errmsg']="");?>
                      </span>
                      <input type="email" name="email" class="input-box" id="exampleInputEmail1" placeholder="Enter Your Email ID" required>
                      <input type="password" name="password" class="input-box" id="exampleInputPassword1" placeholder="Enter Your Password" required>
                      <button type="submit" name="signin" class="submit-btn">sign in</button>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">Don't Have An Account?</button>
                    <a href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="card-back">
                    <h2 style="color: #fff; margin-bottom: 25px;">SIGN UP</h2>
                    <form role="form" method="post" name="register" onSubmit="return valid();">
                      <input type="text" name="name" class="input-box" placeholder="Enter Your Name" required>
                      <input type="email" name="email" class="input-box" placeholder="Enter Your Email" required>
                      <input type="text" name="contact" class="input-box" placeholder="Enter Your Contact No." required>
                      <input type="text" name="nid" class="input-box" placeholder="Enter Your National ID" required>
                      <input type="password" name="password" class="input-box" placeholder="Enter Password" required>
                      <input type="password" name="confirmpassword" class="input-box" placeholder="Confirm Password" required>
                      <input type="checkbox" name=""><span style="color: #fff; font-size: 13px; margin-left: 10px;">I agree with the Terms and Conditions</span>
                      <button type="submit" name="submit" class="submit-btn">sign up</button>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">Already Have An Account?</button>
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
                  <strong>Email:</strong> info@example.com<br>
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
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
    var card = document.getElementById("card");

    function openRegister(){
      card.style.transform = "rotateY(-180deg)";
    }

    function openLogin(){
      card.style.transform = "rotateY(0deg)"
    }

    function valid(){
      if(document.register.password.value != document.register.confirmpassword.value) {
        alert("Caution: Password and Confirm Password Field do not match.");
        document.register.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>

</body>

</html>