<?php
session_start();
error_reporting(0);
include('includes/config.php');
$productid=intval($_GET['productid']);
if(isset($_POST['submitReview'])){
  $name = $_POST['name'];
  $review=$_POST['comment'];
  $sql3 = mysqli_query($con,"insert into reviews(prodId,name,comment) values ('$productid','$name','$review')");
  if($sql3){
    echo "<script>alert('You have successfully reviewed the product.');</script>"; 
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

  <title>PAWS - Product Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pawicon.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
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
            <li><a href="ecommerce.php">PAWS - Shop</a></li>
            <li>Product Details</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <?php
          $sql2=mysqli_query($con,"select * from product where id='$productid'");
          while($row2=mysqli_fetch_array($sql2)){
          ?>
          <div class="col-lg-7">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../products/img<?php echo htmlentities($row2['id']);?>.1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../products/img<?php echo htmlentities($row2['id']);?>.2.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          
          <div class="col-lg-5">
            <div class="portfolio-info">
              <h3>Product Information</h3>
              <ul>
                <li><strong>Product Name</strong>: <?php echo htmlentities($row2['prodname']);?></li>
                <li><strong>Manufacturer</strong>: <?php echo htmlentities($row2['manufacturer']);?></li>
                <li><strong>Price</strong>: <?php echo htmlentities($row2['price']);?></li>
                <li><strong>Availability</strong>: <?php echo htmlentities($row2['availability']);?></li>
                <li><strong>Added to Inventory On</strong>: <?php echo htmlentities($row2['creationDate']);?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Product Description</h2>
              <p><?php echo $row2['proddescription'];?></p>
            </div>
          </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials" style="background: url('assets/img/cta-bg.jpg') no-repeat; padding: 80px 0; background-position: center center; background-size: cover; position: relative;">
      <div class="container" data-aos="fade-up">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">
            <?php
            $sql4 = mysqli_query($con,"select * from reviews where prodId='$productid'");
            while($row4=mysqli_fetch_array($sql4)){
            ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/user.png" class="testimonial-img" alt="">
                <h3><?php echo htmlentities($row4['name']);?></h3>
                <h4>Posted On: <?php echo htmlentities($row4['postdate']);?></h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <?php echo htmlentities($row4['comment']);?>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
            <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="comments">
              <div class="reply-form">
                <h4>Leave your Review</h4>
                <p>Required fields are marked as *</p>
                <form action="" method="post">
                  <div class="row">
                    <div class="col form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                    </div>
                  </div>
                  <button name="submitReview" type="submit_review" class="btn btn-primary">Post Review</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include('includes/footer.php');?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

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