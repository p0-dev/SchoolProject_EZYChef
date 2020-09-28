<!--This controller is used for different log in and user's data validation-->

<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class loginController extends mainController{
    //Function name: validation
    //Purposes: validating data from log in form - checking database for user
    //Input: username and password from global variable POST
    //Output: redirect to dashboard controller --> dashboard page
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
        //setting user session
        //go to dashboard
        $this->view->redirect('dashboard', 'view');
      }else{
        //set get global var for display error message
        $_GET['loginError'] = true;
        //go to index.php
        $this->view->redirect('index.php', null);
      }
    }
  }
 ?>
