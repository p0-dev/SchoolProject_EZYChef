<?php
session_start();
//checking session
$username = $_SESSION['USER'];
$permission = $_SESSION['PERMISSION'];
if(null == $username || null == $permission){
  exit('Something went wrong! Life sucks, hah!');
}
//checking access through router
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}
//constant
define('ID', 1);
define('DES', 2);
define('INDEX', 3);
define('SALE_UNIT_MODEL', '../models/sale_unit.php');
define('COST_SALE_MODEL', '../models/sale_cost.php');
define('SALE_MODEL', '../models/sale.php');

class importController extends mainController{

  /**/
  //more validation for the file (cols and row)
  private function processSaleUnit($fileURL, $startTime, $endTime){
    $arr = array();
    $index = 0;
    if(null != $fileURL && null != $startTime && null != $endTime){
      if(file_exists($fileURL)){
        $file = fopen($fileURL, 'r');
        if(false != $file){
          require_once SALE_UNIT_MODEL;
          while(!feof($file)){
            $row = fgets($file);
            $row = explode(';', $row);
            if($this->findProductId($row[ID])){
              for($tmp = new customTime($startTime->getYear(), $startTime->getMonth()), $i = INDEX; $tmp->getCompareTime() <= $endTime->getCompareTime(); $tmp->increaseMonth(1), $i++){
                $obj = new sale_unit($row[ID], $tmp->returnTimeToSQL(), $row[$i]);
                $arr[$index++] = $obj;
              }
            }
          }
          fclose($file);
          $this->database->connect();
          $test = $this->database->insertArrUnitSale($arr);
          $this->database->close();
          if(false != $test){
            $this->database->connect();
            $test = $this->database->insertProfit();
            $test = $this->database->insertUnitProfit();
            $this->database->close();
            $this->view->redirect('dashboard', 'view');
          }else{
            die('processSaleUnit - import process - insert database fail');
          }
        }else{
          die('processSaleUnit - import process - file can not be open');
        }
      }else{
        die('processSaleUnit - import process - file null');
      }
    }else{
      die('processSaleUnit - import process - input null');
    }
  }

  /**/
  //more validation for the file (cols and row)
  private function processSaleCost($fileURL, $startTime, $endTime){
    $arr = array();
    $index = 0;
    if(null != $fileURL && null != $startTime && null != $endTime){
      if(file_exists($fileURL)){
        $file = fopen($fileURL, 'r');
        if(false != $file){
          require_once COST_SALE_MODEL;
          while(!feof($file)){
            $row = fgets($file);
            $row = explode(';', $row);
            if($this->findProductId($row[ID])){
              for($tmp = new customTime($startTime->getYear(), $startTime->getMonth()), $i = INDEX; $tmp->getCompareTime() <= $endTime->getCompareTime(); $tmp->increaseMonth(1), $i++){
                $row[$i] = str_replace("$",'',$row[$i]);
                $row[$i] = str_replace(",",'',$row[$i]);
                $row[$i] = floatval($row[$i]);
                $obj = new sale_cost($row[ID], $tmp->returnTimeToSQL(), $row[$i]);
                $arr[$index++] = $obj;
              }
            }
          }
          fclose($file);
          $this->database->connect();
          $test = $this->database->insertArrCostSale($arr);
          $this->database->close();
          if(false != $test){
            $this->database->connect();
            $test = $this->database->insertProfit();
            $test = $this->database->insertUnitProfit();
            $this->database->close();
            $this->view->redirect('dashboard', 'view');
          }else{
            die('processSaleCost - import process - insert database fail');
          }
        }else{
          die('processSaleCost - import process - file can not be open');
        }
      }else{
        die('processSaleCost - import process - file null');
      }
    }else{
      die('processSaleCost - import process - input null');
    }
  }

  /**/
  private function processSale($fileURL, $startTime, $endTime){
    $arr = array();
    $index = 0;
    if(null != $fileURL && null != $startTime && null != $endTime){
      if(file_exists($fileURL)){
        $file = fopen($fileURL, 'r');
        if(false != $file){
          require_once SALE_MODEL;
          while(!feof($file)){
            $row = fgets($file);
            $row = explode(';', $row);
            if($this->findProductId($row[ID])){
              for($tmp = new customTime($startTime->getYear(), $startTime->getMonth()), $i = INDEX; $tmp->getCompareTime() <= $endTime->getCompareTime(); $tmp->increaseMonth(1), $i++){
                $row[$i] = str_replace("$",'',$row[$i]);
                $row[$i] = str_replace(",",'',$row[$i]);
                $row[$i] = floatval($row[$i]);
                $obj = new sale($row[ID], $tmp->returnTimeToSQL(), $row[$i]);
                $arr[$index++] = $obj;
              }
            }
          }
          fclose($file);
          $this->database->connect();
          $test = $this->database->insertArrSale($arr);
          $this->database->close();
          if(false != $test){
            $this->database->connect();
            $test = $this->database->insertProfit();
            $test = $this->database->insertUnitProfit();
            $this->database->close();
            $this->view->redirect('dashboard', 'view');
          }else{
            die('processSale - import process - insert database fail');
          }
        }else{
          die('processSale - import process - file can not be open');
        }
      }else{
        die('processSale - import process - file null');
      }
    }else{
      die('processSale - import process - input null');
    }
  }

  /**/
  private function findProductId($id){
    $this->database->connect();
    $result = $this->database->searchProductById($id);
    $this->database->close();
    return $result;
  }

  /**/
  public function view(){
    $this->view->render('importCSV.php');
  }

  /**/
  public function upload(){
    //checking integrity of website
    if(!isset($_POST['fromImportCSV']) || !isset($_POST['inputDocType']) || !isset($_POST['inputStartTime']) || !isset($_POST['inputEndTime'])){
      exit('Not nice mate! Go screw yourself!');
      //redirect to error page
    }
    //get post vars
    $docType = $_POST['inputDocType'];
    $startTimeStr = $_POST['inputStartTime'];
    $endTimeStr = $_POST['inputEndTime'];
    //process input datetime
    $startTimeStr = explode('-', $startTimeStr);
    $startTime = new customTime($startTimeStr[0], $startTimeStr[1]);
    $endTimeStr = explode('-', $endTimeStr);
    $endTime = new customTime($endTimeStr[0], $endTimeStr[1]);
    //info into session
    $_SESSION['docType'] = $docType;
    $_SESSION['startTime'] = serialize($startTime);
    $_SESSION['endTime'] = serialize($endTime);
    //debug
    /*
    echo $docType;
    echo $startTime->displayTime() . '<br>';
    echo $endTime->displayTime() . '<br>';
    */
    $this->view->render('uploadFile.php');
  }

  /**/
  public function uploading(){
    //validation
    if(!isset($_POST['fromUploadFile'])){
      die('me may deo upload file a!');
      //redirect to error page
    }
    //getting vars
    $target_dir = '../uploads/';
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $fileName = $_FILES["fileToUpload"]["name"];
    $fileTmpName = $_FILES["fileToUpload"]["tmp_name"];
    $_SESSION['fileURL'] = $target_file;
    //debug
    //echo $target_dir . '<br>';
    //echo $target_file . '<br>';
    //echo $fileName . '<br>';
    //echo $fileTmpName . '<br>';
    //upload file to folder inside webserver
    if(move_uploaded_file($fileTmpName, $target_file)){
      $this->view->redirect('import', 'process');
    }
    else{
      die('Upload file is not OK.');
      //redirect to error page
    }
  }

  /**/
  public function process(){
    //validation
    if(!isset($_SESSION['docType'])){
      die('import/process - no doc type');
    }
    else if(!isset($_SESSION['fileURL'])){
      die('import/process - no file url');
    }
    //getting session
    $docType = $_SESSION['docType'];
    $startTime = unserialize($_SESSION['startTime']);
    $endTime = unserialize($_SESSION['endTime']);
    $fileURL = $_SESSION['fileURL'];
    //debug
    /*
    echo $docType . '<br>';
    echo $startTime->displayTime() . '<br>';
    echo $endTime->displayTime() . '<br>';
    */
    //destroy unnecessary session
    //unset($_SESSION['docType']);
    //unset($_SESSION['startTime']);
    //unset($_SESSION['endTime']);
    //unset($_SESSION['fileURL']);
    //delete upload file
    //unlink($fileURL);
    //process CSV
    switch ($docType) {
      case 'sale_unit': $this->processSaleUnit($fileURL, $startTime, $endTime); break;
      case 'sale_cost': $this->processSaleCost($fileURL, $startTime, $endTime); break;
      case 'sale': $this->processSale($fileURL, $startTime, $endTime); break;
      default: die('proces import - wrong doc type'); break;
    }
  }

  /**/

}
