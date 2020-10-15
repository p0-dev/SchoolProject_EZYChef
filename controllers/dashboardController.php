<?php
session_start();
//checking direct access from users
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}
//constants
define('PROFIT_MODEL', '../models/profit.php');
require_once PROFIT_MODEL;

class dashboardController extends mainController{

  /*
    Purposes: render dashboard page.
    Input: none.
    Process: views library --> require_once dashboard page
    Output: dashboard.php
  */
  public function view(){
    //load profit table
    $this->loadProfit();
    //check session
    $username = $_SESSION['USER'];
    $permission = $_SESSION['PERMISSION'];
    if(isset($_SESSION['profitTable']))
    if(null != $username && null != $permission){
      $this->view->render('dashboard.php');
    }
    else{
      //test
      exit("dashboardController - check session fail.");
      //go to error page
    }
  }

  /**/
  private function loadProfit(){
    $this->database->connect();
    $arr = $this->database->getProfitData();
    $this->database->close();
    if(false != $arr){
      //set to session
      $_SESSION['profitTable'] = ($arr);
    }else{
      die('can not run getProfitData - loadProfit - dashboardController');
    }
  }

}
