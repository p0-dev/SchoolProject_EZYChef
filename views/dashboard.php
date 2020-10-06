<!--This master page will be root page of all page!-->

<!--CHECKING SESSION AND DIRECT ACCESS FROM USERS-->
<?php
//check session
$username = $_SESSION['USER'];
$permission = $_SESSION['PERMISSION'];
if(null == $username || null == $permission){
  exit('Something went wrong! Life sucks, hah!');
}
//check direct access
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}
?>

<!--TEST-->
<?php
//remove session for testing
session_destroy();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test site</title>
    <link rel="stylesheet" href="/views/css/dboard.css">
  </head>
  <body>
    <!--header-->
    <div class="header">
      <h1>EZYCHEF</h1><br>
      <h3>What the fuck this is, it sucks!</h3>
    </div>

    <!--navi-->
    <div class="navi">
      <ul>
        <li class=""> <a href="#" class="active">HOME</a> </li>
        <li> <a href="#">HOME</a> </li>
        <li> <a href="#">HOME</a> </li>
        <li> <a href="#">HOME</a> </li>
        <li> <a href="#">HOME</a> </li>
        <li> <a href="#">HOME</a> </li>
      </ul>
    </div>

    <!--body container-->
    <div class="body-container">

      <!--navigation-->
      <div class="navigation">
        <ul class="">
          <p>SUB-MENU</p>
          <li> <a href="#" class="active">HOME</a> </li>
          <li> <a href="#">HOME</a> </li>
          <li> <a href="#">HOME</a> </li>
          <li> <a href="#">HOME</a> </li>
          <li> <a href="#">HOME</a> </li>
          <li> <a href="#">HOME</a> </li>
        </ul>
      </div>

      <!--main-->
      <div class="main">
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
        <h1>fuck</h1>
      </div>

    </div>

    <!--footer-->
    <br>
    <hr>
    <div class="footer">
      <h1>Ezychef information:</h1>
      <h3>This is a fucking company with a fucking CEO!</h3>
    </div>

    <!---->
    <!---->
    <!---->
  </body>
</html>
