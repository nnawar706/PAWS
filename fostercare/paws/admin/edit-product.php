<?php
session_start();
error_reporting(0);
include('includes/config.php');
$prod_id=intval($_GET['prod_id']);
if(isset($_POST['submit'])){
	$cat=$_POST['category'];
	$subcat=$_POST['subcategory'];
	$name=$_POST['prodname'];
	$brand=$_POST['prodbrand'];
	$description=$_POST['prodDesc'];
	$price=$_POST['prodprice'];
	$pricedisc=$_POST['prodpricedisc'];
	$status=$_POST['availability'];
	$sql=mysqli_query($con,"update product set catid='$cat',subcatid='$subcat',prodname='$name',manufacturer='$brand',proddescription='$description',price='$price',discount_price='$pricedisc',availability='$status' where id='$prod_id'");
	$_SESSION['msg']="Caution: Product information has been updated.";
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

  <title>PAWS - Insert Product</title>
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
						<h2>Insert Product</h2>
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
										<h3>Insert Product</h3>
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
										<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
											<?php
											$query1=mysqli_query($con,"select product.*,category.name as catname,category.id as cid,subcategory.subcategory as subcatname,subcategory.id as scid from product join category on category.id=product.catid join subcategory on subcategory.id=product.subcatid where product.id='$prod_id'");
											$count=1;
											while($row1=mysqli_fetch_array($query1)){
											?>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Admin Name">Category</label>
													<select name="category" onChange="getSubcat(this.value);" style="width: 100%; height: 35px;" required>
														<option value="<?php echo htmlentities($row1['cid']);?>"><?php echo htmlentities($row1['catname']);?></option>
														<?php
														$query2=mysqli_query($con,"select * from category");
														while($row2=mysqli_fetch_array($query2)){
															if($row1['catname']==$row2['name']){
																continue;
															}
															else{
														?>
														<option value="<?php echo $row2['id'];?>"><?php echo $row2['name'];?></option>
													    <?php } } ?>
													</select>
												</div>
											</div>
											<br>
											<hr style="color: #5697d0;">
											<br>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Admin Name">Sub Category</label>
													<select name="subcategory" id="subcategory" style="width: 100%; height: 35px;" required>
														<option value="<?php echo htmlentities($row1['scid']);?>"><?php echo htmlentities($row1['subcatname']);?></option>
													</select>
												</div>
											</div>
											<br>
											<hr style="color: #5697d0;">
											<br>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Product Name">Product Name</label>
													<input type="text" class="form-control unicase-form-control text-input" id="prodname" name="prodname" value="<?php echo htmlentities($row1['prodname']);?>" required="required">
												</div>
											</div>
											<br>
											<hr style="color: #5697d0;">
											<br>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Manufacturer">Manufacturer</label>
													<input type="text" class="form-control unicase-form-control text-input" id="prodbrand" name="prodbrand" value="<?php echo htmlentities($row1['manufacturer']);?>" required="required">
												</div>
											</div>
											<br>
											<hr style="color: #5697d0;">
											<br>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Description">Description</label>
													<textarea style="width: 95%;" name="prodDesc" placeholder="Enter Product Description" rows="6" class="span8 tip"><?php echo htmlentities($row1['proddescription']);?></textarea>
												</div>
											</div>
											<br>
											<hr style="color: #5697d0;">
											<br>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Price">Price</label>
													<input type="text" class="form-control unicase-form-control text-input" id="prodbrand" name="prodprice" value="<?php echo htmlentities($row1['price']);?>" required="required">
												</div>
											</div>
											<br>
											<hr style="color: #5697d0;">
											<br>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Price">Discount Price</label>
													<input type="text" class="form-control unicase-form-control text-input" id="prodbrand" name="prodpricedisc" value="<?php echo htmlentities($row1['discount_price']);?>">
												</div>
											</div>
											<br>
											<hr style="color: #5697d0;">
											<br>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Admin Name">Availability</label>
													<select name="availability" id="prodavailability" style="width: 100%; height: 35px;" required>
														<option value="<?php echo htmlentities($row1['availability']);?>"><?php echo htmlentities($row1['availability']);?></option>
														<option value="In Stock">In Stock</option>
														<option value="Out of Stock">Out of Stock</option>
													</select>
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
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	
	<script type="text/javascript">
		function getSubcat(val){
			$.ajax({
				type: "POST",
				url: "get_subcat.php",
				data: 'cat_id='+val,
				success: function(data){
					$("#subcategory").html(data);
				}
			});
		}
	</script>

	<!-- Template Main JS File -->
	<script src="../assets/js/main.js"></script>

</body>
</html>
