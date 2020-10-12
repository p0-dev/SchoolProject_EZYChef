<?php
session_start();
//checking session
//checking access through router

//constant
define('ID', 1);
define('DES', 2);
define('INDEX', 3);
define('UNIT_SALE_MODEL', '../models/unit_sales.php');
define('COST_SALE_MODEL', '../models/sale_cost.php');

class importController extends mainController{

  /**/
  public function findProductId($id){
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
    //getting session
    $docType = $_SESSION['docType'];
    $startTime = unserialize($_SESSION['startTime']);
    $endTime = unserialize($_SESSION['endTime']);
    $fileURL = $_SESSION['fileURL'];
    //debug
    //*
    echo $docType . '<br>';
    echo $startTime->displayTime() . '<br>';
    echo $endTime->displayTime() . '<br>';
    /*/
    //destroy unnecessary session
    /*
    unset($_SESSION['docType']);
    unset($_SESSION['startTime']);
    unset($_SESSION['endTime']);
    */
    //vars
    $arr = array(); //return result
    $count = 0;

    //process
    if(file_exists($fileURL)){
      $file = fopen($fileURL, 'r');
      if(false != $file){
        while(!feof($file)){
          $row = fgets($file);
          $row = explode(';', $row);
          if($this->findProductId($row[1])){
            echo $row[1] . '-->' . $row[2] . '<br>';
            for($tmp = new customTime($startTime->getYear(), $startTime->getMonth()), $index = INDEX; $tmp->getCompareTime() <= $endTime->getCompareTime(); $tmp->increaseMonth(1), $index++){
              echo 'time = ' . $tmp->displayTime() . '-->' . $row[$index] . '<br>';
            }
          }
        }
        fclose($file);
      }
      else{
        die('can not open file! - import process!');
        //redirect to error page
      }
    }
    else{
      die('file is not existed!');
      //redirect to error page
    }

    //import to database
    if('sale_unit' == $docType){
      echo 'process sale unit';
    }
    else if('sale_cost' == $docType){
      echo 'process sale cost';
    }
    else{
      echo 'do not understand';
      //redirect to error page
    }

    //delete uploaded file
  }

  /**/

}
