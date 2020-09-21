<!--Index.php will be a login page-->
<!--Checking local session for user's session
If already logged in -> dashboard page
If not, proceeding to log in function-->

<?php
  //Checking local session for already logged in user
 ?>

<!--Log in function form-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!--Header-->
  <head>
    <meta charset="utf-8">
    <title>Ezychef</title>
  </head>

  <!--Body-->
  <body>

    <!--Introduction to the business operation-->
    <h1>Welcome to Ezychef's business management system</h1><br><hr><br>

    <!--Log in form-->
    <!--Further improvements
      1. Using HTML5 for validation
      2. Using Javascript for validation
      3. Aligning all elements inside the form (does not have to be nice, but it could be professional)
      4. Using Css for decoration (optional)
    -->
    <form class="" action="login/validation/" method="POST">
      <label for="txtUsername">Username:</label><br>
      <input type="text" id="txtUsername" name="txtUsername" value="" required><br>
      <label for="txtPassword">Password:</label><br>
      <input type="password" id="txtPassword" name="txtPassword" value="" required><br><br>
      <input type="submit" value="Log in">
    </form><br><hr>

    <!--Footer-->
    <footer>This is footer</footer>

    <!--Test-->
    <?php include test.php; ?>

  </body>
</html>
