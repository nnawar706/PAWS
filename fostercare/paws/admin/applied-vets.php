<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['update'])){
	$nid=$_POST['nid'];
	$query=mysqli_query($con,"update appliedvets set status='Approved' where nid='$nid'");
	$num=mysqli_fetch_array($query);
	if($num>0){
		echo "<script>alert('The following applicant has been approved.');</script>";
	} else{
		echo "<script>alert('Caution: No Applicant is available with this NID.');</script>";
	}
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin | Applied Vets</title>
	<!--complete this later-->
	<link href="../assets/img/pawicon.png" rel="icon">

	<!-- Vendor CSS Files -->
	<link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
	<header id="header" class="fixed-top header-inner-pages">
		<div class="container">
			<a href="add-admin.php" class="logo"><img src="../assets/img/logo.png" alt=""></a>
		</div>
	</header><!-- End Header -->

	<main id="main" style="padding-top: 70px;">
		<!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-10">
						<ol>
							<li><a href="add-admin.php">Home</a></li>
							<li>Admin Panel</li>
						</ol>
						<h2>Applied Veterinarians</h2>
					</div>
				</div>
			</div>
		</section><!-- End Breadcrumbs -->

		<?php include('includes/topbar.php');?>

		<section class="inner-page">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<p style="text-align: center;">Enter the National ID of the vet whose application you want to accept</p>
						<form action="" method="post">
							<input type="text" name="nid" required style="width: 100%; height: 40px;">
							<button type="submit" name="update" class="btn-upper btn update-button" style="width: 45%; height: 40px; font-size: 18px; background: #428bca; margin-top: 20px; margin-left: 28%; color: #fff;">Approve Application</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="inner-page team" id="team">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-10">
						<div class="row">
							<?php
							$query=mysqli_query($con,"select * from appliedvets where status='Not Approved Yet'");
							while($row=mysqli_fetch_array($query)){
							?>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="member">
									<img src="../../vets/img<?php echo htmlentities($row['id']);?>.jpg" class="img-fluid" alt="">
									<div class="member-info">
										<div class="member-info-content">
											<a href="vet-info.php?vet_id=<?php echo htmlentities($row['id']);?>" class="stretched-link">
												<h4><?php echo htmlentities($row['name']);?>-<?php echo htmlentities($row['nid']);?></h4>
											<span>Check Info</span></a>
										</div>
										<div class="social">
											<a href=""><i class="bi bi-twitter"></i></a>
											<a href=""><i class="bi bi-facebook"></i></a>
											<a href=""><i class="bi bi-instagram"></i></a>
											<a href=""><i class="bi bi-linkedin"></i></a>
										</div>
									</div>
								</div>
							</div> <!-- End Member Item -->
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>
	<?php include('includes/footer.php');?>
	
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Template Main JS File -->
	<script src="../assets/js/main.js"></script>

	<!-- Vendor JS Files -->
	<script src="../assets/vendor/purecounter/purecounter.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
</body>
</html>