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

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezychef Dashboard</title>
    <link rel="stylesheet" href="/views/css/layout.css">
    <script type="text/javascript" src="/views/scripts/activeMenu.js"></script>
  </head>

  <body>

    <!--active menu information-->
    <input type="text" name="" value="dashboardMenu" hidden id="activeMenu">
    <input type="text" name="" value="" hidden id="activeSubMenu">

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
          <li> <a href="#" class="" id="importCSVSubMenu">IMPORT CSV</a> </li>
        </ul>
      </div>

      <!--main-->
      <div class="main">

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
