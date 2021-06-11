

<body>
 <div id="login">
        <h3>X Titan - Admin </h3>
        <form action="Database/Admin.php" method="POST"  class="was-validated" >

        <div class="form-group">
       <label for="uname">Username:</label>
       <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
       <div class="valid-feedback">Valid.</div>
       <div class="invalid-feedback">Please fill out this field.</div>
     </div>
     <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
     </div>    
     <button type="submit" class="btn btn-primary">LOGIN</button><br>
   </form>
   </div>
   </div>


   <?php 

if(isset($_POST['submit'])){
  if(!empty($_POST['uname']) || !empty($_POST['pwd'])){
      $username = $_POST['uname'];
      $password = $_POST['pwd'];
      if($uname == "admin" && $password == "admin"){
          header("Location: Admin.php");
      }else{
          if($username != "admin"){
              echo "  <script>
                  alert('Incorrect username'); 
              </script>";
          }else{
              if($password != "admin"){
                  echo "  <script>
                      alert('Incorrect password'); 
                  </script>";
              }
          }
      }
  }else{
      echo "  <script>
                  alert('Please fill in all the fields'); 
              </script>";
  }
}








  ?>




 </body>

