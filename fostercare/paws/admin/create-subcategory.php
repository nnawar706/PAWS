<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit'])){
	$category=$_POST['category'];
	$subcategory=$_POST['subcategory'];
	$query2=mysqli_query($con,"insert into subcategory(categoryid,subcategory) values('$category','$subcategory')");
	$_SESSION['msg']="A new subcategory has been created.";
}
if(isset($_GET['del'])){
	$query4=mysqli_query($con,"delete from subcategory where id='".$_GET['subcatid']."'");
	$_SESSION['delmsg']="Cation:A subcategory has been deleted.";
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

  <title>PAWS - SubCategory</title>
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
							<li>Manage Sub-Category</li>
						</ol>
						<h2>Create Sub-Category</h2>
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
										<h3>Create a New Sub-Category</h3>
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

										<?php
										if(isset($_POST['del'])){
										?>
										<div class="alert alert-error">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<?php echo htmlentities($_SESSION['delmsg']);?>
											<?php echo htmlentities($_SESSION['delmsg']="");?>
										</div>
										<?php }?>
										<br>
										<form class="form-horizontal row-fluid" name="subcategory" method="post">
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px; margin-bottom: 20px;">
													<label class="info-title" for="Admin Name">Category</label>
													<select name="category" style="width: 100%; height: 35px; float: right;" required>
														<option value="">Select Category</option>
														<?php
														$query1=mysqli_query($con,"select * from category");
														while($row1=mysqli_fetch_array($query1)){
														?>
														<option value="<?php echo $row1['id'];?>"><?php echo $row1['name'];?></option>
													    <?php } ?>
													</select>	
												</div>
											</div>
											<div class="row">
												<div class="col-md-11 form-group" style="margin-left: 38px;">
													<label class="info-title" for="Admin Name">Sub-Category Name</label>
													<input type="text" class="form-control unicase-form-control text-input" id="name" name="subcategory" required="required">
												</div>
											</div>
											<div class="control-group">
												<div class="controls">
													<button type="submit" name="submit" class="btn-upper btn update-button" style="width: 15%; height: 40px; font-size: 18px; background-color: #5697d0; margin-top: 20px; margin-left: 40%; color: #fff;">Create</button>
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

		<section class="inner-page">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="content">
								<div class="module">
									<div class="module-head">
										<h3>Sub-Category List</h3>
									</div>
									<div class="module-body table">
										<br>
										<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
											<thead>
												<tr><th>#</th><th>Sub-Category Name</th><th>Category</th><th>Creation Date</th><th>Update</th></tr>
											</thead>
											<tbody>
												<?php
												$query3=mysqli_query($con,"select subcategory.id,category.name,subcategory.subcategory,subcategory.time from subcategory join category on category.id=subcategory.categoryid");
												$count=1;
												while($row3=mysqli_fetch_array($query3)){
												?>
												<tr>
													<td><?php echo htmlentities($count);?></td>
													<td><?php echo htmlentities($row3['subcategory']);?></td>
													<td><?php echo htmlentities($row3['name']);?></td>
													<td><?php echo htmlentities($row3['time']);?></td>
													<td>
														<a href="edit-subcategory.php?subcat_id=<?php echo $row3['id']?>"><i class="icon-edit"></i></a>
														<a href="create-subcategory.php?subcatid=<?php echo $row3['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete the selected sub-category?')"><i class="icon-remove-sign"></i></a>
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
