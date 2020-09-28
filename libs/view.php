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
  define('INDEX', '../');

  class view{
    /*
    This view library is used to require (include) a php page or "rendering" a php page
    Input: string of the name of php page
    Output: require_once that page
    */
    public function render($page){
      if('index.php' == $page){
        require_once INDEX.$page;
      }else{
        require_once VIEWS.$page;
      }
    }
    /*
    Function name: redirect
    Purposes: redirect to different location of the website through header function
    Input:
    Case 1: $page = controller name, $function = function name
    Case 2: $page = page name, $function = null
    Output: redirect to the destination, if not --> exit();
    */
    public function redirect($page, $function){
      if(null != $page){
        if(null == $function){
          if('index.php' == $page){
            //redirect to index.php
            header('Location: /'.$page);
            exit();
          }else{
            //redirect to pages from view folder
            header('Location: /'.'views/'.$page);
            exit();
          }
        }else{
          //redirect to controller and its functions
          header('Location: /'.$page.'/'.$function);
          exit();
        }
      }else{
        //wrong input
        echo 'Motherfucker, you redirect a fucking null page! Are you fucking nuts?';
      }
    }
  }
?>
