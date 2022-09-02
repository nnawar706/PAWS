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

  <title>PAWS - Adoption Application</title>
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
  <link type="text/css" href="assets/vendor/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
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
            <li>Pet Adoption</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    	
    	<div class="container">
    		<div class="section-header">
    			<h2>Your Applications</h2>
    		</div>
    	</div>

    	<div class="container">
    		<div class="row gy-5 gx-lg-5">

    			<div class="col-lg-4">
    				<div class="info">
    					<h3 style="margin-bottom: 20px;">Adopt Pet</h3>
    					<div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <a href="adoption.php"><h4>Your Applications</h4></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <a href="adopt-pet.php"><h4>Browse Pets</h4></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <a href="dltapp.php"><h4>Delete Application</h4></a>
                </div>
              </div><!-- End Info Item -->
    				</div>
    			</div>
    			

          <?php
            $query = mysqli_query($con, "select * from users where id='".$_SESSION['id']."'");
            while($row = mysqli_fetch_array($query)){
          ?>
                <div class="col-lg-8">
                	<div class="row" style="margin: 10px 0;">
                		<div class="col-md-6 form-group">
                			<label class="info-title" for="name">User ID</label>
                			<input type="text" class="form-control unicase-form-control text-input" id="uid" name="uid" value="<?php echo $row['id'];?>" readonly>
                		</div>
                	</div>
           <?php } ?>
                	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" width="100%">
                		<thead>
                			<tr><th>Application ID</th><th>Owner's Name</th><th>Contact</th><th>Pet Name</th><th>Type</th><th>Status</th></tr>
                		</thead>
                		<tbody>
                			<?php
                			$query01=mysqli_query($con,"select * from adoption where applicantid='".$_SESSION['id']."'");
                			while ($row01=mysqli_fetch_array($query01)) {	
                			?>
                			<tr>
                				<td><?php echo htmlentities($row01['id']);?></td>
                        <?php
                        $pet=$row01['petid'];
                        $sql12=mysqli_query($con,"select * from pethome where id='$pet'");
                        while($r=mysqli_fetch_array($sql12)){
                        ?>
                        <?php
                        $owner=$r['uid'];
                        $sql13=mysqli_query($con,"select name,contact from users where id='$owner'");
                        while($o=mysqli_fetch_array($sql13)){
                        ?>
                        <td><?php echo htmlentities($o['name']);?></td>
                        <td><?php echo htmlentities($o['contact']);?></td>
                        <?php } ?>
                				<td><?php echo htmlentities($r['petName']);?></td>
                				<td><?php echo htmlentities($r['petType']);?></td>
                        <?php } ?>
                				<td><?php echo htmlentities($row01['status']);?></td>
                			</tr>
                			<?php } ?>
                		</tbody>
                	</table>
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
