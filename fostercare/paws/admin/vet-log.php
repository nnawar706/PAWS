<?php
session_start();
error_reporting(0);
include('includes/config.php');
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
	<title>Admin | Manage Users</title>
	<!--complete this later-->
	<link href="../assets/img/pawicon.png" rel="icon">

	<!-- Vendor CSS Files -->
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css">
	<link type="text/css" href="../assets/vendor/icons/css/font-awesome.css" rel="stylesheet">
	<link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="../assets/css/style.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
</head>
<body>
	<header id="header" class="fixed-top header-inner-pages">
		<div class="container">
			<a href="../index.php" class="logo"><img src="../assets/img/logo.png" alt=""></a>
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
						<h2>Veterinarian Log History</h2>
					</div>
				</div>
			</div>
		</section><!-- End Breadcrumbs -->

		<?php include('includes/topbar.php');?>

		<section class="inner-page">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="content">
								<div class="module">
									<div class="module-head">
										<h3>Log History</h3>
									</div>
									<div class="module-body table">
										<br>
										<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
											<thead>
												<tr><th>#</th><th>Email</th><th>IP Address</th><th>Sign In Time</th><th>Sign Out Time</th></tr>
											</thead>
											<tbody>
												<?php
												$query1=mysqli_query($con,"select * from vetlog");
												$count=1;
												while($row1=mysqli_fetch_array($query1)){
												?>
												<tr>
													<td><?php echo htmlentities($count);?></td>
													<td><?php echo htmlentities($row1['email']);?></td>
													<td><?php echo htmlentities($row1['vetip']);?></td>
													<td><?php echo htmlentities($row1['loginTime']);?></td>
													<td><?php echo htmlentities($row1['logoutTime']);?></td>
													<?php $count=$count+1; }?>
												</tr>
											</tbody>
										</table>
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

	<!-- Template Main JS File -->
	<script src="../assets/js/main.js"></script>

	<!--Vendor JS Files-->
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		});
	</script>
</body>
</html>