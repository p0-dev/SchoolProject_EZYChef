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
    <link rel="stylesheet" href="/views/css/dashboard.css">
  </head>

  <!--body-->
  <body class="body">

    <!--header-->
    <div class="header">
      <h1>This is the header</h1>
    </div>

    <!--horizontal navigation-->
    <div class="navi">
      <h1>Navigation bar fuck</h1>
    </div>

    <!--body container-->
    <div class="body-container">

      <!--vertical navigation-->
      <div class="menu">
        <ul class="menu-list">
          <li> <a href="#">Menu 1</a> </li>
          <li> <a href="#">Menu 1</a> </li>
          <li> <a href="#">Menu 1</a> </li>
          <li> <a href="#">Menu 1</a> </li>
          <li> <a href="#">Menu 1</a> </li>
          <li> <a href="#">Menu 1</a> </li>
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
