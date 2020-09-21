<!--Database connection-->
<!--Further improvements:
  1. All information for connecting database will be encrypted and put on outside configuration file.
  2. Configuration file could be saved as binary file for more security.
-->

<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  //database connection information
  $mysqli = new mysqli("localhost", "ezychef", "123456", "EzyChef");

  //connecting to database
  if(mysqli_connect_errno()){
    die("Connection fail: ".$mysqli->connect_error);
    echo '<script>alert("Something is wrong with database connection.")</script>';
  }
 ?>
