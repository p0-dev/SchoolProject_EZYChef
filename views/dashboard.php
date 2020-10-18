<?php

session_start();

//check session
$username = $_SESSION['USER'];
$permission = $_SESSION['PERMISSION'];
if(null == $username || null == $permission){
  exit('Something went wrong! Life sucks, hah!');
}

//get session
$obj = ($_SESSION['profitTable']);
$obj1 = $_SESSION['unitProfitTable'];

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
  </head>

  <body>

    <!--active menu information-->
    <input type="text" name="" value="dashboardMenu" hidden id="activeMenu">
    <input type="text" name="" value="" hidden id="activeSubMenu">

    <!--header-->
    <div class="header">
      <h1>EZYCHEF</h1><br>
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

        <!--table for profit-->
        <div class="profit_table_wrapper">
          <h3>Total profit of each product per month</h3>
          <table class="profit_table">
            <tr>
              <th>ID</th>
              <th>Timestamp</th>
              <th>Value</th>
              <th>Description</th>
            </tr>
            <?php
              foreach ($obj as $key) {
                ?>
                <tr>
                  <td><?php echo $key->getProductId(); ?></td>
                  <td><?php echo $key->getRecordTime(); ?></td>
                  <td><?php echo $key->getValue(); ?></td>
                  <td><?php echo $key->getDescription(); ?></td>
                </tr>
                <?php
              }
             ?>
          </table>
        </div>
        <br><br><hr><br><br>

        <!--table for unit profit-->
        <div class="unit_profit_wrapper">
          <h3>Profit of each product (unit) per month</h3>
          <table class="unit_profit_table">
            <tr>
              <th>ID</th>
              <th>Timestamp</th>
              <th>Value</th>
              <th>Description</th>
            </tr>
            <?php
              foreach ($obj1 as $key) {
                ?>
                <tr>
                  <td><?php echo $key->getProductId(); ?></td>
                  <td><?php echo $key->getRecordTime(); ?></td>
                  <td><?php echo $key->getValue(); ?></td>
                  <td><?php echo $key->getDescription(); ?></td>
                </tr>
                <?php
              }
             ?>
          </table>
        </div>

      </div>

    </div>

    <!--footer-->
    <br>
    <hr>
    <div class="footer">
      <h1>Ezychef information:</h1>
    </div>

    <script type="text/javascript" src="/views/scripts/activeMenu.js"></script>

  </body>
</html>
