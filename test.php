<?php
define("AccessAllowance", true);
echo 'test' . '<br>';
require_once 'libs/database_connection.php';
require_once 'libs/customTime.php';
require_once 'models/product.php';
require_once 'models/sale_unit.php';
$con = new databaseConnection();
$con->connect();

$fileURL = 'uploads/sale_unit_2020.csv';
$startTime = new customTime(2019, 7);
$endTime = new customTime(2020, 4);
$startTime->display();
$endTime->display();
$arr = array();
$index = 0;

$file = fopen($fileURL, 'r');
if(false != $file){
  while(!feof($file)){
    $row = fgets($file);
    $row = explode(';', $row);
    if($con->searchProductById($row[1])){
      $tmp = new customTime($startTime->getYear(), $startTime->getMonth());
      $dex = 3;
      for(; $tmp->getCompareTime() <= $endTime->getCompareTime(); $tmp->increaseMonth(1), $dex++){
        $obj = new sale_unit($row[1], $tmp->returnTimeToSQL(), $row[$dex]);
        //echo 'time: ' . $tmp->displayTime() . '-->' . $row[$dex] . '<br>';
        $obj->display();
        $arr[$index++] = $obj;
      }
    }
  }
  $con->insertArrUnitSale($arr);
}

$con->close();
echo 'end test'.'<br>';
