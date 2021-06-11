<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Includes header -->
	<?php include 'includes/head.php';?>
</head>
<body>
        <!-- Includes Navbar -->
	<?php $page = 'home';include 'includes/navbar.php';?>
      <!-- Start  Carousel  -->
 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="img/beverages.jpg" alt="Los Angeles" width="1000" height="200">
      <div class="carousel-caption" id="beverage">
        <h1>X-Titan E-Commerce </h1>
        <p class="p1">Stay Home,Stay Safe</p>
      </div>
    </div>
    <div class="carousel-item"  >
      <img src="img/shopping.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption" id="beverage">
        <h1>X-Titan E-Commerce</h1>
        <p class="p1">Members enjoy EXTRA!</p>
      </div>
    </div>
    <div class="carousel-item"  >
      <img src="img/ecommerce.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption" id="beverage">
        <h1>X-Titan E-Commerce</h1>
        <p class="p1">LIMITED TIME VOUCHER</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
 </div>
	<!--- End Carousel -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Join us and explore X-Titan.</h3>
				<p> The X-Titan e-commerce website provides services for users such as discounts and promotions, (based on the region).</p>
				<p>Enjoy 100% authentic products and fast delivery on most items when you buy from us today!</p>
        </p><a class="btn btn-purple btn-lg" href="Dashboard.php">LOGIN</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/ddd.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

      <!-- Includes Footer -->
	<?php include 'includes/footer.php';?>


</body>
</html>
