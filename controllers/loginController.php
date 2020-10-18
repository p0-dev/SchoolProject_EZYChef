<?php
//checking direct access through router
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

class loginController extends mainController{

  /**/
  public function validation(){
    //getting vars
    $username = null;
    $password = null;
    if(isset($_POST['txtUsername'])){
      $username = $_POST['txtUsername'];
    }else{
      die('Can not get username from the login form.');
    }
    if(isset($_POST['txtPassword'])){
      $password = $_POST['txtPassword'];
    }else{
      die('Can not get password from the login form.');
    }
    $password = hash('sha256', $password);
    //connect database and validating username + password
    $validation = false;
    try {
      $this->database->connect();
      $validation = $this->database->userValidation($username, $password);
    } catch (Exception $e) {
      $this->view->redirectInput('errorView', 'defaultView', 'Can not connect to database.');
      die('Can not connect to database.');
    } finally {
      $this->database->close();
    }
    //redirect users to corresponding destinations
    if($validation){
      $this->view->redirect('dashboard', 'view');
    }else{
      $this->view->redirect('index.php?loginError=1', null);
    }
  }

  /**/
  public function logout(){
    session_destroy();
    $this->view->redirect('index.php', null);
  }

  /**/

}
