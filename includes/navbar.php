
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
<body>
<!--- Navigation -->

<nav class="navbar navbar-dark bg-danger navbar-expand-md fixed-top">

  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/x-tatin.png"></a>
    <button class="navbar-toggler" data-target="#navbarMenu" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page=='Announcement'){echo 'active';}?>" href="Announcement.php">Announcement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page=='About'){echo 'active';}?>" href="About.php">About</a>
        </li>
        <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Contact Us</a>
       <div class="dropdown-menu" >
        <a class="dropdown-item " href="Dashboard.php">Dashboard</a>
        <a class="dropdown-item" href="#" class="logout">logout</a>
       </div>
       </li>
     </ul>
    </div>
  </div>
</nav>
<!--- End Navigation -->

</body>
</html>
