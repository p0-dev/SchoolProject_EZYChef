<?php

  #Definition: loginController is responsible for different functions related to user's log in, authentication and will be re-directed from login page.

  echo 'inside login controller';

  class loginController #extends MainController
  {

    #CONSTRUCTOR
    function __construct()
    {
      echo "this is login controller";
      echo $_POST['txtUsername'];
      echo $_POST['txtPassword'];
    }

    #VALIDATION USER'S LOGIN
    #Input: username and password from POST session
    #Output: dashboard page (valid) or error page (in-valid)
    public function validation()
    {
      echo "validation function";
    }

  }

 ?>
