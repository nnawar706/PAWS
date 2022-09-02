<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<style type="text/css">
		.accordion{
			margin: 20px auto;
			display: flex;
			flex-direction: column;
			gap: 30px;
		}
		.item{
			border-radius: 5px;
			box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.2);
			display: grid;
			grid-template-columns: auto 1fr auto;
			gap: 30px;
			align-items: center;
			padding: 20px;
			cursor: pointer;
		}
		.hidden-box{
			grid-column: 2/3;
			display: none;
		}
		.active{
			position: relative;
		}
		.active::after{
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 0;
			border-top: 3px solid #5697d0;
			animation: animate 2s linear forwards;
		}
		@keyframes animate{
			0%{
				width: 0;
			}
			100%{
				width: 100%;
			}
		}
		.active .hidden-box{
			display: block;
		}
	</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PAWS - Book Appointment</title>
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
            <li><a href="contact-vets.php">Contact a Vet</a></li>
            <li>Book Appointment</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Book an Appointment</h2>
          <p>Our compassionate and enthusiastic vets are available 24/7 in your service so that your beloved pets can have a healthy life.</p><br><br>
          <p>Before booking any slot, please send the mentioned amount to +8801234567891 using Bkash.</p>
          <p style="color: #000;">Online Consultation: Tk.500 | Offline Consultation: Tk.700</p>
        </div>

        <div class="accordion">
        	<div class="item">
        		<p class="number">01</p><h4>Online Consultation</h4>
        		<div class="iconOpen">
        			<i class="fa fa icon-plus-sign"></i>
        		</div>
        		<div class="iconClose">
        			<i class="fa fa icon-minus-sign"></i>
        		</div>
        		<div class="hidden-box">
        			<!-- Google Calendar Appointment Scheduling begin -->
        			<iframe src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ1OT8CqdDcOyOg5V7kMT06eJsJOOjsNJE2fPc_gtVqDhMFP1LFbF4Pr8YlXz3LdOhKca8sL1MKy?gv=true" style="border: 0" width="100%" height="600" frameborder="0"></iframe>
        			<!-- end Google Calendar Appointment Scheduling -->
        		</div>
        	</div>

        	<div class="item">
        		<p class="number">02</p><h4>Offline Consultation</h4>
        		<div class="iconOpen">
        			<i class="fa fa icon-plus-sign"></i>
        		</div>
        		<div class="iconClose">
        			<i class="fa fa icon-minus-sign"></i>
        		</div>
        		<div class="hidden-box">
        			<!-- Google Calendar Appointment Scheduling begin -->
        			<iframe src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ1OT8CqdDcOyOg5V7kMT06eJsJOOjsNJE2fPc_gtVqDhMFP1LFbF4Pr8YlXz3LdOhKca8sL1MKy?gv=true" style="border: 0" width="100%" height="600" frameborder="0"></iframe>
        			<!-- end Google Calendar Appointment Scheduling -->
        		</div>
        	</div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <?php include('includes/footer.php');?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script type="text/javascript">
  	const itemDiv = document.getElementsByClassName('item');
  	const openIcon = document.getElementsByClassName('iconOpen');
  	const closeIcon = document.getElementsByClassName('iconClose');
  	for(let i=0;i<itemDiv.length;i++){
  		closeIcon[i].style.display = "none";
  		itemDiv[i].addEventListener("click",()=>{
  			const result = itemDiv[i].classList.toggle("active");
  			if(result){
  				closeIcon[i].style.display = "block";
  				openIcon[i].style.display = "none";
  			}
  			else{
  				closeIcon[i].style.display = "none";
  				openIcon[i].style.display = "block";
  			}
  		});
  	}
  </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main2.js"></script>

</body>

</html>