<?php
session_start();
error_reporting(0);
include('includes/config.php');

// Admin Sign In
if(isset($_POST['signin'])){
  $name = $_POST['name'];
  $password = $_POST['password'];
  $query = mysqli_query($con,"select * from admin where name='$name' and password='$password'");
  $num = mysqli_fetch_array($query);
  if($num>0){
    $_SESSION['adminname'] = $num['name'];
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    $extra = "add-admin.php";
    header("location:http://$host$uri/$extra");
    exit();
  }
  else{
    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    $extra="signin.php";
    header("location:http://$host$uri/$extra");
    $_SESSION['errmsg'] = "Invalid Name or Password. Please try again";
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PAWS - Admin Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/pawicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="../index.php" class="logo"><img src="../assets/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="../index.php" style="color: #fff;">Back to PAWS</a></li>
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
              <li>Admin Panel</li>
            </ol>
            <h2>Sign In</h2>
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
                      <input type="text" name="name" class="input-box" id="exampleInputEmail1" placeholder="Enter Name" required>
                      <input type="password" name="password" class="input-box" id="exampleInputPassword1" placeholder="Enter Password" required>
                      <button type="submit" name="signin" class="submit-btn">sign in</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

  </main><!-- End #main -->

  <?php include('includes/footer.php');?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
  
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>