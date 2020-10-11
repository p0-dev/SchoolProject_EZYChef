<?php
//checking direct access through router
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

class loginController extends mainController{

  /*
    Purposes: validating log in information (user).
    Input: username and password through POST.
    Process: database connection --> userValidation --> return result true/false.
    Output: true/false based on validation on database.
  */
  public function validation(){
    //getting vars
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $password = hash('sha256', $password);
    //connect database and validating username + password
    $this->database->connect();
    $validation = $this->database->userValidation($username, $password);
    $this->database->close();
    //redirect users to corresponding destinations
    if($validation){
      $this->view->redirect('dashboard', 'view');
    }else{
      $this->view->redirect('index.php?loginError=1', null);
    }
  }

  /*
    Purposes: destroy user's session (log out).
    Process: destroy session --> redirect to index.php page.
    Output: redirect to index.php page.
  */
  public function logout(){
    session_destroy();
    $this->view->redirect('index.php', null);
  }

  /**/

}
