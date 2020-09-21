<!--Main controller: used to implement common functions for all other controllers from programmers (such as view function and render function)-->
<!--All controllers need to be child of this mainController-->
<!--Further improvements:
-->

<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class mainController{
    function __construct(){
      echo 'Test mainController constructor';
    }
  }
 ?>
