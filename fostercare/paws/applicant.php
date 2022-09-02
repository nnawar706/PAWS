<!-- COMPLETE -->

<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['update'])){
  $sql1=mysqli_query($con,"update adoption set status='Accepted' where id='".$_GET['applicationid']."'");
  $sql2=mysqli_query($con,"select applicantid,petid from adoption where id='".$_GET['applicationid']."'");
  while($r2=mysqli_fetch_array($sql2)){
    $applicantid=$r2['applicantid'];
    $petid=$r2['petid'];
    $sql3=mysqli_query($con,"update pethome set status='Adopted',adoptedby='$applicantid' where id='$petid'");
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
  <link href="assets/vendor/icons/css/font-awesome.css" rel="stylesheet">
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
            <li>Find Home for Pets</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    	
    	<div class="container">
    		<div class="section-header">
    			<h2>Applicant List</h2>
    		</div>
    	</div>

    	<div class="container">
    		<div class="row gy-5 gx-lg-5">

    			<div class="col-lg-4">
    				<div class="info">
    					<h3 style="margin-bottom: 20px;">User Account</h3>
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
                	<div class="row" style="margin: 10px 0;">
                		<div class="col-md-6 form-group">
                			<label class="info-title" for="name">User ID</label>
                			<input type="text" class="form-control unicase-form-control text-input" id="uid" name="uid" value="<?php echo $row['id'];?>" readonly>
                		</div>
                	</div>
           <?php } ?>
                	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" width="100%">
                		<thead>
                			<tr><th>Application ID</th><th>Pet Name</th><th>Pet Type</th><th>Applicant's Name</th><th>Applicant's Contact</th><th>Status</th></tr>
                		</thead>
                		<tbody>
                			<?php
                			$query01=mysqli_query($con,"select * from adoption where ownerid='".$_SESSION['id']."'");
                			while ($row01=mysqli_fetch_array($query01)) {
                        $pet=$row01['petid'];
                        $sql4=mysqli_query($con,"select status from pethome where id='$pet'");
                        while ($r4=mysqli_fetch_array($sql4)){
                          if($r4['status']=="Not Adopted"){
                			?>
                			<tr>
                				<td><?php echo htmlentities($row01['id']);?></td>
                        <?php
                        $pet=$row01['petid'];
                        $query03=mysqli_query($con,"select petName,petType from pethome where id='$pet'");
                        while($row03=mysqli_fetch_array($query03)){
                        ?>
                        <td><?php echo htmlentities($row03['petName']);?></td>
                        <td><?php echo htmlentities($row03['petType']);?></td>
                        <?php } ?>
                        <?php
                        $applicant=$row01['applicantid'];
                        $query02=mysqli_query($con,"select name,contact from users where id='$applicant'");
                        while($row02=mysqli_fetch_array($query02)){
                        ?>
                				<td><?php echo htmlentities($row02['name']);?></td>
                				<td><?php echo htmlentities($row02['contact']);?></td>
                        <?php } ?>
                        <td><a href="applicant.php?applicationid=<?php echo $row01['id']?>&update=select" onClick="return confirm('Are you sure you want to approve the selected applicantion?')"><i class="icon-edit"></i></a></td>
                			</tr>
                			<?php } } } ?>
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