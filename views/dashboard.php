<?php
session_start();
//checking direct access from users
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}
//checking user session for double security
$username = $_SESSION['USER'];
$permission = $_SESSION['PERMISSION'];
if(null == $username || null == $permission){
  exit('Something went wrong! Life sucks, hah!');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <!--head-->
  <head>
    <meta charset="utf-8">
    <title>Ezychef Dashboard</title>
    <style media="screen">
    </style>
    <link rel="stylesheet" href="/views/css/dboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="height=device-height, initial-scale=1.0">
  </head>

  <!--body-->
  <body class="body">

    <!--header-->
    <div class="header">
      <h1>Ezychef Header</h1>
    </div>

    <!--horizontal navigation-->
    <div class="navi">
      <div class="menu-hori">
        <ul class="menu-hori">
          <li id="list"> <a id="menu" class="active" href="#">Dashboard</a> </li>
          <li id="list"> <a id="menu" class="" href="#">Dashboard</a> </li>
          <li id="list"> <a id="menu" class="" href="#">Dashboard</a> </li>
          <li id="list"> <a id="menu" class="" href="#">Dashboard</a> </li>
          <li id="list"> <a id="menu" class="" href="#">Dashboard</a> </li>
          <li id="list"> <a id="menu" class="" href="#">Dashboard</a> </li>
        </ul>
      </div>
    </div>

    <!--body container-->
    <div class="body-container">

      <!--vertical navigation-->
      <div class="menu">
        <ul class="menu-list">
          <p class="submenu">Actions</p>
          <li id=""> <a id="submenu" class="" href="#">Dashboard</a> </li>
          <li id=""> <a id="submenu" class="" href="#">Dashboard</a> </li>
          <li id=""> <a id="submenu" class="" href="#">Dashboard</a> </li>
          <li id=""> <a id="submenu" class="" href="#">Dashboard</a> </li>
          <li id=""> <a id="submenu" class="" href="#">Dashboard</a> </li>
          <li id=""> <a id="submenu" class="" href="#">Dashboard</a> </li>
        </ul>
      </div>

      <!--main-->
      <div class="main">
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
        <h1>Main</h1><br>
      </div>

    </div>

    <!--footer-->
    <div class="footer">
      <h1>Ezychef footer</h1>
    </div>


  </body>

</html>
