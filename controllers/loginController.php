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
      //validation fail --> throw that motherfucker out of here
      //validation successfully
      $this->view->render('dashboard.php');
    }
  }
 ?>
