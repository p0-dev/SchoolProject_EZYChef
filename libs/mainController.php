<!--Main controller: used to implement common functions for all other controllers from programmers (such as view function and render function)-->
<!--All controllers need to be child of this mainController-->
<!--Further improvements:
  1. Using outside config file.
  2. Instead of using the view.php, implement render inside mainController.
-->

<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  /*
  *In order to render a php page, a controller needs to be extends *mainController and uses this procedure: $this->view->render(php page)
  */
  class mainController{
    function __construct(){
      require_once 'view.php';
      require_once 'database_connection.php';
      $this->view = new view();
      $this->database = new databaseConnection();
    }
  }
 ?>
