<?php
//checking direct access through router
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

class errorViewController extends mainController{

  /**/
  function defaultView($errorMessage){
    $_SESSION['errorMessage'] = $errorMessage;
    $this->view->render('error.php');
  }

  /**/
  function test(){
    echo 'testing error controller.';
  }

}
