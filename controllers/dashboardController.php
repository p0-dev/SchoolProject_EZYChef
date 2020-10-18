<?php
session_start();
//checking direct access from users
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}
//constants
define('PROFIT_MODEL', '../models/profit.php');
define('UNIT_PROFIT_MODEL', '../models/unit_profit.php');
require_once PROFIT_MODEL;
require_once UNIT_PROFIT_MODEL;

class dashboardController extends mainController{

  /*
    Output: render dashboard.php
  */
  public function view(){
    //load profit table and unit_profit table
    $profit = $this->loadProfit();
    $unit_profit = $this->loadUnitProfit();
    //set session
    if(false != $profit){
      $_SESSION['profitTable'] = serialize($profit);
    }else{

    }
    if(false != $unit_profit){
      $_SESSION['unitProfitTable'] = serialize($unit_profit);
    }else{

    }
    //check session for rendering dashboard page
    $username = $_SESSION['USER'];
    $permission = $_SESSION['PERMISSION'];
    if(null != $username && null != $permission){
      $this->view->render('dashboard.php');
    }else{
      $this->view->redirectInput('errorView', 'defaultView', 'You have to log in first. You big fat motherfucker!');
    }
  }

  /**/
  private function loadProfit(){
    $this->database->connect();
    $arr = $this->database->getProfitData();
    $this->database->close();
    if(false != $arr){
      return $arr;
    }
    return false;
  }

  /**/
  private function loadUnitProfit(){
    $this->database->connect();
    $arr = $this->database->getUnitProfitData();
    $this->database->close();
    if(false != $arr){
      return $arr;
    }
    return false;
  }

  /**/

}
