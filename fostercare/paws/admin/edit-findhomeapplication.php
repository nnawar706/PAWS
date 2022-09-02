<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit'])){
	$status=$_POST['status'];
	$contact=$_POST['contact'];
	$amount=$_POST['amount'];
	$pet_id=intval($_GET['pet_id']);
	$sql=mysqli_query($con,"update foster set status='$status',contact='$contact',amount='$amount' where id='$pet_id'");
	$_SESSION['msg']="Caution: The following application has been updated.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		.top{
			margin-top: 70px;
			padding: 0;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.top .wrapper1 ul{
			list-style: none;
		}
		.top .wrapper1 ul li{
			background-color: rgba(23, 26, 29, 0.9);
			width: 170px;
			border: 1px solid #fff;
			border-radius: 20px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			float: left;
			color: #fff;
			font-size: 15px;
		}
		.top .wrapper1 ul li:hover{
			background-color: #5697d0;
		}
		.top .wrapper1 ul ul{
			display: none;
		}
		.top .wrapper1 ul li:hover > ul{
			position: relative;
			display: block;
			z-index: 300;
		}
	</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PAWS - Edit Application</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/pawicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link type="text/css" href="../assets/vendor/icons/css/font-awesome.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

  <!-- Main CSS File --> 
  <link href="assets/css/theme.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
	<header id="header" class="fixed-top header-inner-pages">
		<div class="container d-flex align-items-center justify-content-between">
			<a href="add-admin.php" class="logo"><img src="../assets/img/logo.png" alt=""></a>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto" href="../index.php">Back to PAWS</a></li>
					<li><a class="nav-link scrollto" href="signin.php" style="color: #5697d0; font-size: 14px; font-weight: 600;">Sign Out</a></li>
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
							<li><a href="add-admin.php" style="text-decoration: none;">Home</a></li>
							<li>Admin Panel</li>
							<li>Manage Pet Home</li>
						</ol>
						<h2>Update Application</h2>
					</div>
				</div>
			</div>
		</section><!-- End Breadcrumbs -->

		<?php include('includes/topbar.php');?>

		<section class="inner-page">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="contents">
								<div class="module">
									<div class="module-head">
										<h3>Edit Application</h3>
									</div>
									<div class="module-body">
										<?php
										if(isset($_POST['submit'])){
										?>
										<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<?php echo htmlentities($_SESSION['msg']);?>
											<?php echo htmlentities($_SESSION['msg']="");?>
										</div>
										<?php }?>
										<br>
										<form class="form-horizontal row-fluid" name="fosterapp" method="post">
											<?php
											$pet_id=intval($_GET['pet_id']);
											$query=mysqli_query($con,"select * from findhome where id='$pet_id'");
											while($row=mysqli_fetch_array($query)){
											?>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Admin Name">Pet Description</label>
													<input type="text" class="form-control unicase-form-control text-input" id="name" name="description" value="Type: <?php echo htmlentities($row['petType']);?>/Name: <?php echo htmlentities($row['petName']);?>/Age: <?php echo htmlentities($row['petAge']);?>/Gender: <?php echo htmlentities($row['petGender']);?>" readonly>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Admin Name">Contact</label>
													<input type="text" class="form-control unicase-form-control text-input" id="name" name="contact" required="required">
												</div>
											</div>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Admin Name">Amount</label>
													<input type="text" class="form-control unicase-form-control text-input" id="name" name="amount" required="required">
												</div>
											</div>
										    <?php } ?>
											<div class="control-group">
												<div class="controls">
													<button type="submit" name="submit" class="btn-upper btn update-button" style="width: 15%; height: 40px; font-size: 18px; background-color: #5697d0; margin-top: 20px; margin-left: 40%; color: #fff;">Update</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

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
