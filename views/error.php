<?php
//checking direct access
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}
//getting error message
$errorMessage = 'There is no error message.';
if(isset($_SESSION['errorMessage'])){
  $errorMessage = $_SESSION['errorMessage'];
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error page</title>
  </head>
  <body>
    <h1>Error page</h1>
    <h3>Error: <?php echo $errorMessage; ?></h3>
    <form class="" action="/index.php" method="post">
      <input type="submit" name="" value="Going home">
    </form>
  </body>
</html>
