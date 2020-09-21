<!--This is the router for the MVC model.
Every urls from address bar will have to go through this router and will be routed to final destination based on programming.-->
<!--Further improvements
  1. Creating a ini or data file to store different constants.
  2. Checking algorithm for more stable version
-->

<?php
  //constant
  define("CTRL", "Controller");
  define("PATH", "../controllers/");
  //preventing direct access from users
  define("AccessAllowance", true);

  //getting url --> getting controller name and function
  $url = $_GET['url'];
  $url = explode("/", $url);
  $controllerName = $url[0].CTRL;
  $controllerFile = PATH.$url[0].CTRL.'.php';

  //redirecting to other controllers or pages
  if(file_exists($controllerFile)){
    require_once $controllerFile;
    $controller = new $controllerName();
    $test_function = array($controller, $url[1]);
    if(is_callable($test_function, false, $callable_name)){
      if(!is_null($url[2])){
        $controller->{$url[1]}($url[2]);
      }
      elseif(!is_null($url[1])){
        $controller->{$url[1]}();
      }
    }
    else{
      //redirecting to error pages
      echo "There is no function!<br>";
    }
  }
  else{
    //redirecting to error pages
    echo "There is no controller.<br>";
  }
?>
