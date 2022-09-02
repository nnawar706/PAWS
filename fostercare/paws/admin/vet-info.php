<?php
session_start();
error_reporting(0);
include('includes/config.php');

$vet_id=intval($_GET['vet_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin | Vet Information</title>
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
						<h2>Vet Information</h2>
					</div>
				</div>
			</div>
		</section><!-- End Breadcrumbs -->

		<!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

      	<?php
      	$query=mysqli_query($con,"select * from appliedvets where id='$vet_id'");
      	while($row=mysqli_fetch_array($query)){
      	?>
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../../vets/img<?php echo htmlentities($row['id']);?>.jpg" alt="">
                </div>
              </div>
              
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Details</h3>
              <ul>
                <li><strong>Name</strong>: <?php echo htmlentities($row['name']);?></li>
                <li><strong>Email</strong>: <?php echo htmlentities($row['email']);?></li>
                <li><strong>Contact</strong>: <?php echo htmlentities($row['contact']);?></li>
                <li><strong>Age</strong>: <?php echo htmlentities($row['age']);?></li>
                <li><strong>NID</strong>: <?php echo htmlentities($row['nid']);?></li>
              </ul>
              <a href="../../pdfs/resume<?php echo htmlentities($row['id']);?>.pdf" target="_blank">View Resume</a>
            </div>
            <div class="portfolio-description">
              <h2>Portfolio of <?php echo htmlentities($row['name']);?></h2>
              <p>
                <?php echo htmlentities($row['name']);?> is a highly compessionate, personable, efficient and enthusiastic Veterinarian having more than 880 contact hours within 2 amazing vet clinics.<br><br>For any queries, please contact the vet through email or message him/her using PAWS-messenger.
              </p>
            </div>
          </div>

        </div>
    <?php } ?>

      </div>
    </section><!-- End Portfolio Details Section -->
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