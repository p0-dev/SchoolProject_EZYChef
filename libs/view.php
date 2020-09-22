<!--This l      ibrary is responsible for rendering php page-->
<!--Further improvement:
  1. Getting outside configuration file.
-->

<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  //direction to pages
  define("VIEWS", '../views/');

  class view{
    /*
    This view library is used to require (include) a php page or "rendering" a php page
    Input: string of the name of php page
    Output: require_once that page
    */
    public function render($page){
      require_once VIEWS.$page;
    }
  }
?>
