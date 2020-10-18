<?php
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
