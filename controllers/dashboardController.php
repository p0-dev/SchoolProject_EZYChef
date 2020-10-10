<?php
//checking direct access from users
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

  /**/
  class dashboardController extends mainController{
    /**/
    public function view(){
      $this->view->render('dashboard.php');
    }
  }

 ?>
