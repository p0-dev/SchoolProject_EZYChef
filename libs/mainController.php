<?php
  #This is the main controller.
  #Other controllers have to extends from this controller.
  #This will help to set several settings for all controllers at the same time.

  require_once 'viewController.php';

  class MainController
  {
    function __construct()
    {
      echo "This is main controller";
      $this->view = new viewController;
    }
  }

 ?>
