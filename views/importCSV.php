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
     <link rel="stylesheet" href="/views/css/layout.css">
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

        <!--import csv information form-->
        <h1>Import CSV</h1><br><hr><br><br>
        <form class="" action="/import/upload/" method="post" id="importForm">
          <!--document type-->
          <label for="">Type of document: </label><br>
          <input type="radio" name="inputDocType" value="sale_unit" checked>
          <label for="">Sale unit</label><br>
          <input type="radio" name="inputDocType" value="sale_cost">
          <label for="">Cost of sales</label><br>
          <input type="radio" name="inputDocType" value="sale">
          <label for="">Sale</label>
          <br><br>

          <!--time range-->
          <label for="">Start time:</label><br>
          <input type="text" name="inputStartTime" value="" placeholder="YYYY-MM" required id="inputStartTime"><br><br>

          <label for="">End time:</label><br>
          <input type="text" name="inputEndTime" value="" placeholder="YYYY-MM" required id="inputEndTime"><br><br>

          <!--submit-->
          <input type="submit" name="" value="Next" id="submit"><br><br>
          <p id="errorMessage" style="color: red;" hidden></p>

          <!--validation input-->
          <input type="text" name="fromImportCSV" value="" hidden>

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

    <script src="/views/scripts/validateInputTime.js"></script>
    <script  src="/views/scripts/activeMenu.js"></script>

  </body>
</html>
