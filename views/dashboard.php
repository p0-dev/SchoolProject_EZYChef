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
    <title></title>
  </head>

  <!--body-->
  <body>
    <h1>This is the dashboard</h1>
    <form class="" action="/test/motherfucker" method="post">
      <input type="submit" name="Fuck" value="fuck">
    </form>
  </body>

</html>

<?php echo 'Yeah, this is the fucking dashboard'; ?>

<?php echo $_SESSION['USER']; echo $_SESSION['PERMISSION']; ?>
