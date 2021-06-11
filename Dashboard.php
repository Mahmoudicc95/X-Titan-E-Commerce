<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
</head>
<body>  
<?php $page = 'Dashboard';include 'includes/navbar.php';?>
<!-- 
<div class="row mt-5">
     <div class="col-12 text-center mt-5">
      <h3>Login </h3>
      </div>
    </div> -->


 <?php $page = 'login';include 'Database/login.php';?>
   
  <?php include 'includes/footer.php';?>

  <?php include 'includes/script.php';?>
</body>
</html>
