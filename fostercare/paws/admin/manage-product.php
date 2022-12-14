<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['del'])){
	$sql=mysqli_query($con,"delete from product where id='".$_GET['prodid']."'");
	$_SESSION['delmsg']="Caution: A product has been deleted from the inventory.";
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

  <title>PAWS - Product</title>
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
							<li>Manage Product</li>
						</ol>
						<h2>Product Inventory</h2>
					</div>
				</div>
			</div>
		</section><!-- End Breadcrumbs -->

		<?php include('includes/topbar.php');?>

		<section class="inner-page">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="content">
								<div class="module">
									<div class="module-head">
										<h3>Product List</h3>
									</div>
									<div class="module-body table">
										<?php
										if(isset($_POST['del'])){
										?>
										<div class="alert alert-error">
											<button type="button" class="close" data-dismiss="alert">??</button>
											<?php echo htmlentities($_SESSION['delmsg']);?>
											<?php echo htmlentities($_SESSION['delmsg']="");?>
										</div>
										<?php }?>
										<br>
										<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
											<thead>
												<tr><th>#</th><th>Product Name</th><th>Category</th><th>Subcategory</th><th>Manufacturer</th><th>Price</th><th>Price After Discount</th><th>Availability</th><th>Creation Date</th><th>Update</th></tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($con,"select product.*,category.name,subcategory.subcategory from product join category on category.id=product.catid join subcategory on subcategory.id=product.subcatid");
												$count=1;
												while($row=mysqli_fetch_array($query)){
												?>
												<tr>
													<td><?php echo htmlentities($count);?></td>
													<td><?php echo htmlentities($row['prodname']);?></td>
													<td><?php echo htmlentities($row['name']);?></td>
													<td><?php echo htmlentities($row['subcategory']);?></td>
													<td><?php echo htmlentities($row['manufacturer']);?></td>
													<td><?php echo htmlentities($row['price']);?></td>
													<td>
														<?php
														if(intval($row['discount_price'])==0){
															echo htmlentities("NULL");
														}
														else{
															echo htmlentities($row['discount_price']);
														}
														?>
													</td>
													<td><?php echo htmlentities($row['availability']);?></td>
													<td><?php echo htmlentities($row['creationDate']);?></td>
													<td>
														<a href="edit-product.php?prod_id=<?php echo $row['id']?>"><i class="icon-edit"></i></a>
														<a href="manage-product.php?prodid=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete the selected product?')"><i class="icon-remove-sign"></i></a>
													</td>
												</tr>
											    <?php $count=$count+1; } ?>
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
	
	<!-- Template Main JS File -->
	<script src="../assets/js/main.js"></script>

</body>
</html>
