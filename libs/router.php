<!--This is the router for the MVC model.
Every urls from address bar will have to go through this router and will be routed to final destination based on programming.-->
<!--Further improvements
  1. Creating a ini or data file to store different constants.
-->

<?php
  #CONSTANT AND VARIABLES
  define("CTRL", "Controller");
  define("PATH", "./controllers/")

  #ANALYZING RECEIVED URL
  $url = $_GET['url'];
  $url = explode("/", $url);
  $controllerName = $url[0].CTRL;
  $controllerFile = PATH.$url[0].CTRL.'.php';

  #CHECKING EXISTED CONTROLLER FILE
  if(file_exists($controllerFile))
  {
    require_once $controllerFile;
    $controller = new $controllerName();
    $test_function = array($controller, $url[1]);

    #CHECKING EXISTED FUNCTION
    if(is_callable($test_function, false, $callable_name))
    {
      #CALLING FUNCTION WITH INPUT VARIABLE
      if(!is_null($url[2]))
      {
        $controller->{$url[1]}($url[2]);
      }
      #CALLING FUNCTION WITHOUT INPUT VARIABLE
      elseif(!is_null($url[1]))
      {
        $controller->{$url[1]}();
      }
    }
    #REDIRECT TO ERROR PAGES OR CONTROLLERS
    else
    {
      echo "There is no function!<br>";
    }
  }
  #REDIRECT TO ERROR PAGES OR CONTROLLERS
  else
  {
    echo "There is no controller.<br>";
  }
?>
