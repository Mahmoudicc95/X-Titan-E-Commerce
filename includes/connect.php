<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbName = " X-Titan";

  $conn = mysqli_connect($server, $username, $password, $dbName);

  if ($conn->connect_error){
      die ('Database connection error:' .$conn->connect_error);
  }else {
      echo"Db connection successful";
  }
  