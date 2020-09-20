<?php
  #Database connection.
  #Necessary information will be stored inside text files outside.
  #Text file will be formatted as binary text file for more security.

  $mysqli = new mysqli("localhost", "ezychef", "123456", "EzyChef");

  if(mysqli_connect_errno())
  {
    die("Connection fail: ".$mysqli->connect_error);
    echo '<script>alert("Everything is wrong with database connection.")</script>';
  }
  else
  {

  }

 ?>
