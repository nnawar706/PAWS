<?php
session_start();
error_reporting(0);
require_once('includes/config.php');

if(isset($_POST['add'])){
	if(isset($_SESSION['cart'])){
		$session_array_id = array_column($_SESSION['cart'], "id");
		if(!in_array($_GET['id'], $session_array_id)){
			$session_array = array(
				'id' => $_GET['id'],
				"name" => $_POST['name'],
				"price" => $_POST['price'],
				"quantity" => $_POST['quantity']
			);
			$_SESSION['cart'][] = $session_array;
		}
	}
	else{
		$session_array = array(
			'id' => $_GET['id'],
			"name" => $_POST['name'],
			"price" => $_POST['price'],
			"quantity" => $_POST['quantity']
		);
		$_SESSION['cart'][] = $session_array;
	}
}

?>

<?php
  if(isset($_POST['buy'])){
	  mysqli_query($con,"insert into orders(userId,details) values('".$_SESSION['id']."','".$_SESSION['cart']."')");
  }
  if(isset($_GET['action'])){
  	if($_GET['action'] == "remove"){
  		foreach($_SESSION['cart'] as $key => $value){
  			if($value['id'] == $_GET['id']){
  				unset($_SESSION['cart'][$key]);
  			}
  		}
  	}
  	if($_GET['action'] == "refresh"){
  		unset($_SESSION['cart']);
  	}
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		.product-slider {
  width: 100%;
  height: 70vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.product-slider .product-box {
  width: 350px;
  box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
  border-radius: 10px;
  overflow: hidden;
  margin: 25px;
}
.product-slider .product-box .slide-img {
  height: 400px;
  position: relative;
}
.product-slider .product-box .slide-img .product-overlay {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  width: 100%;
  height: 100%;
  background-color: rgba(86, 151, 208, 0.2);
  display: flex;
  justify-content: center;
  align-items: center;
  visibility: hidden;
}
.product-slider .product-box .slide-img .product-overlay .buy-btn {
  width: 130px;
  height: 40px;
  margin: 0 5px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #fff;
  color: #252525;
  font-weight: 700;
  letter-spacing: 1px;
  font-family: calibri;
  border-radius: 20px;
  box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
}
.product-slider .product-box .slide-img .product-overlay .buy-btn:hover {
  color: #fff;
  background-color: #5697d0;
  transition: all ease 0.5s;
}
.product-slider .product-box .slide-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  box-sizing: border-box;
}
.product-slider .product-box .detail-box {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  box-sizing: border-box;
}
.product-slider .product-box .detail-box .product-type {
  display: flex;
  flex-direction: column;
}
.product-slider .product-box .detail-box .product-type a {
  color: #222222;
  margin: 5px 0;
  font-weight: 700;
  letter-spacing: 0.5px;
  padding-right: 8px;
}
.product-slider .product-box .detail-box .product-type span {
  color: rgba(26, 26, 26, 0.5);
}
.product-slider .product-box .detail-box .product-price {
  color: #333333;
  font-weight: 600;
  font-size: 1.1rem;
  font-family: poppins;
  letter-spacing: 0.5px;
}
.product-slider .product-box .slide-img:hover .product-overlay {
  visibility: visible;
  animation: fades 0.5s;
}
@keyframes fades {
  0%{
    opacity: 0;
  }
  100%{
    opacity: 1;
  }
}
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
.deals {
  font-family: 'Poppins', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  overflow: hidden;
}
.ticker {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  height: 50px;
  margin: 0 auto;
}
.news {
  width: 76%;
  background: #cc4444;
  padding: 0 2%;
}
.title {
  width: 20%;
  text-align: center;
  background: #c81c1c;
  position: relative;
  padding-bottom: 20px;
}
.title h5 {
  font-size: 14px;
}
.news marquee {
  font-size: 12px;
}
	</style>
	<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PAWS - Ecommerce</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/pawicon.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/icons/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/variables.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/cart.css" rel="stylesheet">
    <?php require('includes/functions.php');?>
</head>
<body>
	<section id="hero-animated" class="hero-animated d-flex align-items-center">
		<div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
			<img src="assets/img/logo.png" class="img-fluid animated">
			<?php if(strlen($_SESSION['signin'])){
			?>
			<h2>Welcome to PAWS-Ecommerce, <span><?php echo htmlentities($_SESSION['username']);?></span>!</h2>
		    <?php } ?>
		    <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
		    <div class="d-flex shopping-cart">
		    	<a href="homepage.php" class="btn-get-started scrollto shoppingCartButton" style="margin-right: 20px;">Go Back</a>
		    	<a href="signout.php" class="btn-get-started scrollto">Sign Out</a>
		    </div>
		</div>
	</section>
    <main>
	<div class="container deals">
		<div class="ticker">
			<div class="title"><h5>Top Deals!</h5></div>
			<div class="news">
				<marquee><p>lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.</p></marquee>
			</div>
		</div>
	</div>

	<!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
    	<div class="section-header">
        <h2>Product Catalogue</h2>
        <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- Food Catalogue -->
  <section id="products" class="products">
  	<div class="container" data-aos="fade-up">
  		<h3>Pet Food</h3>
  		<hr>
  		<div class="owl-carousel owl-theme product-slider">
  			<?php
  			$query1=mysqli_query($con,"SELECT * FROM product WHERE catid=1 AND availability='In Stock'");
  			while($row1=mysqli_fetch_array($query1)){
  			?>
  			<div class="item">
  				<div class="product-box">
  					<form method="post" action="ecom.php?id=<?=$row1['id']?>">
  					<div class="slide-img">
  						<img src="../products/img<?php echo htmlentities($row1['id']);?>.1.jpg" alt="product image">
  						<div class="product-overlay">
  							<a href="product-details.php?productid=<?php echo htmlentities($row1['id']);?>" class="buy-btn">Details</a>
  							<input type="hidden" name="name" value="<?=$row1['prodname']?>">
  							<input type="hidden" name="price" value="<?=$row1['price']?>">
  							<input type="number" name="quantity" value="1" class="form-control" style="width: 20%;">
  							<input type="submit" name="add" class="addToCart buy-btn" value="Add To Cart">
  						</div>
  					</div>
  					<div class="detail-box">
  						<div class="product-type">
  							<p class="productName"><a href="#"><?php echo htmlentities($row1['prodname']);?></a></p>
  							<span><?php echo htmlentities($row1['availability']);?></span>
  						</div>
  						<?php
              if($row1['discount_price']!=0){
              ?>
              <a href="#" class="product-price" style="color: #750d06;"><s><del>&#2547;</del><?php echo htmlentities($row1['price']);?></s></a>
              <a href="#" class="product-price price"><del>&#2547;</del><span class="priceValue"><?php echo htmlentities($row1['discount_price']);?></span></a>
              <?php } 
              else{
              ?>
              <a href="#" class="product-price price" style="margin-left: 3px;"><del>&#2547;</del><span class="priceValue"><?php echo htmlentities($row1['price']);?></span></a>
              <?php } ?>
  					</div>
  					</form>
  				</div>
  			</div>
  		<?php } ?>
  		</div>
  	</div>
  </section>

  <!-- Accessories Catalogue -->
  <section id="products" class="products">
  	<div class="container" data-aos="fade-up">
  		<h3>Pet Accessories</h3>
  		<hr>
  		<div class="owl-carousel owl-theme product-slider">
  			<?php
  			$query1=mysqli_query($con,"SELECT * FROM product WHERE catid=3 AND availability='In Stock'");
  			while($row1=mysqli_fetch_array($query1)){
  			?>
  			<div class="item">
  				<div class="product-box">
  					<form method="post" action="ecom.php?id=<?=$row1['id']?>">
  					<div class="slide-img">
  						<img src="../products/img<?php echo htmlentities($row1['id']);?>.1.jpg" alt="product image">
  						<div class="product-overlay">
  							<a href="product-details.php?productid=<?php echo htmlentities($row1['id']);?>" class="buy-btn">Details</a>
  							<input type="hidden" name="name" value="<?=$row1['prodname']?>">
  							<input type="hidden" name="price" value="<?=$row1['price']?>">
  							<input type="number" name="quantity" value="1" class="form-control" style="width: 20%;">
  							<input type="submit" name="add" class="addToCart buy-btn" value="Add To Cart">
  						</div>
  					</div>
  					<div class="detail-box">
  						<div class="product-type">
  							<p class="productName"><a href="#"><?php echo htmlentities($row1['prodname']);?></a></p>
  							<span><?php echo htmlentities($row1['availability']);?></span>
  						</div>
  						<?php
              if($row1['discount_price']!=0){
              ?>
              <a href="#" class="product-price" style="color: #750d06;"><s><del>&#2547;</del><?php echo htmlentities($row1['price']);?></s></a>
              <a href="#" class="product-price price"><del>&#2547;</del><span class="priceValue"><?php echo htmlentities($row1['discount_price']);?></span></a>
              <?php } 
              else{
              ?>
              <a href="#" class="product-price price" style="margin-left: 3px;"><del>&#2547;</del><span class="priceValue"><?php echo htmlentities($row1['price']);?></span></a>
              <?php } ?>
  					</div>
  					</form>
  				</div>
  			</div>
  		<?php } ?>
  		</div>
  	</div>
  </section>

  <!-- Medicine Catalogue -->
  <section id="products" class="products">
  	<div class="container" data-aos="fade-up">
  		<h3>Pet Medicines</h3>
  		<hr>
  		<div class="owl-carousel owl-theme product-slider">
  			<?php
  			$query1=mysqli_query($con,"SELECT * FROM product WHERE catid=2 AND availability='In Stock'");
  			while($row1=mysqli_fetch_array($query1)){
  			?>
  			<div class="item">
  				<div class="product-box">
  					<form method="post" action="ecom.php?id=<?=$row1['id']?>">
  					<div class="slide-img">
  						<img src="../products/img<?php echo htmlentities($row1['id']);?>.1.jpg" alt="product image">
  						<div class="product-overlay">
  							<a href="product-details.php?productid=<?php echo htmlentities($row1['id']);?>" class="buy-btn">Details</a>
  							<input type="hidden" name="name" value="<?=$row1['prodname']?>">
  							<input type="hidden" name="price" value="<?=$row1['price']?>">
  							<input type="number" name="quantity" value="1" class="form-control" style="width: 20%;">
  							<input type="submit" name="add" class="addToCart buy-btn" value="Add To Cart">
  						</div>
  					</div>
  					<div class="detail-box">
  						<div class="product-type">
  							<p class="productName"><a href="#"><?php echo htmlentities($row1['prodname']);?></a></p>
  							<span><?php echo htmlentities($row1['availability']);?></span>
  						</div>
  						<?php
              if($row1['discount_price']!=0){
              ?>
              <a href="#" class="product-price" style="color: #750d06;"><s><del>&#2547;</del><?php echo htmlentities($row1['price']);?></s></a>
              <a href="#" class="product-price price"><del>&#2547;</del><span class="priceValue"><?php echo htmlentities($row1['discount_price']);?></span></a>
              <?php } 
              else{
              ?>
              <a href="#" class="product-price price" style="margin-left: 3px;"><del>&#2547;</del><span class="priceValue"><?php echo htmlentities($row1['price']);?></span></a>
              <?php } ?>
  					</div>
  					</form>
  				</div>
  			</div>
  		<?php } ?>
  		</div>
  	</div>
  </section>

  <div class="container" id="cart">
  	<div class="col-md-6 offset-md-3">
  		<?php
  		$total = 0;
  		$output = "";
  		$output .= "
  		<table class='table table-bordered table-stripped'>
  			<caption>**Delivery charge <del>&#2547;</del>100 will be added to the total price.</caption>
  			
  				<tr>
  					<th>ID</th>
  					<th>Item Name</th>
  					<th>Item Price</th>
  					<th>Item Quantity</th>
  					<th>Total Price</th>
  					<th>Update</th>
  				</tr>
  		
  		";
  		if(!empty($_SESSION['cart'])){
  			foreach ($_SESSION['cart'] as $key => $value) {
  				$output .= "
  				<tr>
  				<td>".$value['id']."</td>
  				<td>".$value['name']."</td>
  				<td>".$value['price']."</td>
  				<td>".$value['quantity']."</td>
  				<td><del>&#2547;</del>".number_format($value['price'] * $value['quantity'],2)."</td>
  				<td><a href='ecom.php?action=remove&id=".$value['id']."'><i class='icon-remove-sign'></i></a></td>
  				</tr>
  				";
  				$total = $total + $value['quantity'] * $value['price'];
  			}
  			$output .= "
  			<tr>
  			<td colspan='3'></td>
  			<td><b>Total Price:</b></td>
  			<td><del>&#2547;</del>".number_format($total,2)."</td>
  			<td><a href='ecom.php?action=refresh'><button class='btn btn-danger btn-block'>Refresh</button></a></td>
  			</tr>
  			</table>
  			<button type='submit' name='buy' class='btn-upper btn update-button' style='width: 35%; height: 40px; font-size: 18px; background-color: #5697d0; margin-top: 20px; margin-left: 30%; margin-bottom: 20px; color: #fff;'>Confirm Purchase</button>
  			";
  		}
  		echo $output;		
  		?>
  	</div>
  </div>

	<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
	</script>

	<!-- Template Main JS File -->
	<script src="assets/js/main2.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>