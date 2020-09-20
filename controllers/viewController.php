<?php

  #echo "This is view controller";

  #This controller is intended for rendering views.
  class viewController
  {
    function __construct()
    {
      echo "This is view controller";
    }

    #Rendering view for controllers.
    public function render($view)
    {
      echo "render function";
      //require_once '../views/dashboard.php';
    }
  }
 ?>
