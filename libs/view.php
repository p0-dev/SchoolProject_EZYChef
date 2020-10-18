<?php
//checking direct access from users
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}
//direction to pages
define("VIEWS", '../views/');
define('INDEX', '../');

class view{

  /**/
  public function render($page){
    if('index.php' == $page){
      require_once INDEX.$page;
    }else{
      require_once VIEWS.$page;
    }
  }

  /**/
  public function redirect($page, $function){
    if(null != $page){
      if(null == $function){
        if(false !== strpos($page, 'index.php')){
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
      echo 'Wrong input to redirect function.';
    }
  }

  /**/
  function redirectInput($page, $function, $input){
    if(null != $page && null != $function && null != $input){
      header('Location: /' . $page . '/' . $function . '/' . $input . '/');
      exit('Can not redirect ot page.');
    }else{
      exit('Wrong input - redirectInput - view library.');
    }
  }

  /**/
  function redirectInputs($page, $function, $input){
    if(null != $page && null != $function && null != $input){
      $inputNum = 0;
      try {
        $inputNum = count($input);
      } catch (Exception $e) {
        die($e);
      }
      if(0 < $inputNum){
        $location = '/' . $page . '/' . $function;
        for($i = 0; $i < $inputNum; $i++){
          $location = $location . '/' . $input[$i];
        }
        header('Location: ' . $location);
        exit('Can not redirect ot page.');
      }else{
        exit('Wrong input - $input (array) - redirectInputs - view library.');
      }
    }else{
      exit('Wrong input - redirectInputs - view library.');
    }
  }

}
