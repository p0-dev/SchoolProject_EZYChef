<?php

session_start();

//checking direct access from users
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

class dashboardController extends mainController{

  /*
    Purposes: render dashboard page.
    Input: none.
    Process: views library --> require_once dashboard page
    Output: dashboard.php
  */
  public function view(){
    //check session
    $username = $_SESSION['USER'];
    $permission = $_SESSION['PERMISSION'];
    if(null != $username && null != $permission){
      $this->view->render('dashboard.php');
    }
    else{
      //test
      exit("dashboardController - check session fail.");
      //go to error page
    }
  }

  /**/

}
