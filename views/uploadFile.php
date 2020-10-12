<?php

session_start();

//check session
$username = $_SESSION['USER'];
$permission = $_SESSION['PERMISSION'];
if(null == $username || null == $permission){
  exit('Something went wrong! Life sucks, hah!');
}

//check direct access through router
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

//getting session
$docType = $_SESSION['docType'];
$startTime = unserialize($_SESSION['startTime']);
$endTime = unserialize($_SESSION['endTime']);
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="/views/css/layout.css">
     <script type="text/javascript" src="/views/scripts/activeMenu.js"></script>
    <title>Import CSV</title>
  </head>
  <body>

    <!--active menu information-->
    <input type="text" name="" value="" hidden id="activeMenu">
    <input type="text" name="" value="importCSVSubMenu" hidden id="activeSubMenu">

    <!--header-->
    <div class="header">
      <h1>EZYCHEF</h1><br>
      <h3>What the fuck this is, it sucks!</h3>
    </div>

    <!--navi-->
    <div class="navi">
      <ul>
        <li class=""> <a href="/dashboard/view/" class="" id="dashboardMenu">DASHBOARD</a> </li>
        <li class=""> <a href="#" class="user"> <label for="">User: </label> <?php echo $username; ?> </a> </li>
        <li class=""> <a href="/login/logout/" class="">LOG OUT</a> </li>
      </ul>
    </div>

    <!--body container-->
    <div class="body-container">

      <!--navigation-->
      <div class="navigation">
        <ul class="">
          <p>SUB-MENU</p>
          <li> <a href="/import/view/" class="" id="importCSVSubMenu">IMPORT CSV</a> </li>
        </ul>
      </div>

      <!--main-->
      <div class="main">

        <!--document information preview-->
        <h3>Document upload information preview</h3>
        <label for="">Type of document: <?php echo $docType; ?> </label><br>
        <label for="">Start time: <?php echo $startTime->displayTime(); ?> </label><br>
        <label for="">End time: <?php echo $endTime->displayTime(); ?> </label><br><br><hr><br>

        <!--upload file-->
        <form action="/import/uploading/" method="post" enctype="multipart/form-data">
          Select csv file to upload:<br><br>
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload csv file" name="submit">
        </form>

      </div>

    </div>

    <!--footer-->
    <br>
    <hr>
    <div class="footer">
      <h1>Ezychef information:</h1>
      <h3>This is a fucking company with a fucking CEO!</h3>
    </div>

  </body>
</html>
