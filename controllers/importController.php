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
    $docType = $_POST['inputDocType'];
    $startTime = $_POST['inputStartTime'];
    $endTime = $_POST['inputEndTime'];

    $startTime = explode('-', $startTime);
    $startMonth = $startTime[0];
    $startYear = $startTime[1];

    $endTime = explode('-', $endTime);
    $endMonth = $endTime[0];
    $endYear = $endTime[1];

    $_SESSION['docType'] = $docType;
    $_SESSION['startMonth'] = $startMonth;
    $_SESSION['startYear'] = $startYear;
    $_SESSION['endMonth'] = $endMonth;
    $_SESSION['endYear'] = $endYear;

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
    $startMonth = $_SESSION['startMonth'];
    $startYear = $_SESSION['startYear'];
    $endMonth = $_SESSION['endMonth'];
    $endYear = $_SESSION['endYear'];
    $fileURL = $_SESSION['fileURL'];

    //destroy unnecessary session
    /*
    unset($_SESSION['docType']);
    unset($_SESSION['startMonth']);
    unset($_SESSION['startYear']);
    unset($_SESSION['endMonth']);
    unset($_SESSION['endYear']);
    unset($_SESSION['fileURL']);
    */

    //vars
    $arr = array();
    $count = 0;
    $endYear = intval($endYear);
    $endMonth = intval($endMonth);
    $startMonth = intval($startMonth);
    $startYear = intval($startYear);
    $indexStart = null;
    $tmp = null;

    //process
    if(file_exists($fileURL)){
      $file = fopen($fileURL, 'r');
      if(false != $file){
        while(!feof($file)){
          $indexStart = INDEX;
          $month = $startMonth;
          $year = $startYear;
          $string = fgets($file);
          $string = explode(';', $string);
          $id = $string[ID];
          $des = $string[DES];
          if($this->findProductId($id)){
            $count++;
            $yearCompare = $year + ($month/12);
            $yearEndCompare = $endYear + ($endMonth/12);
            for(; $yearCompare <= $yearEndCompare ; ){
              //getting data
              require_once UNIT_SALE_MODEL;
              echo 'month = ' . $month . '/' . $year . '-->' . $string[$indexStart++] . '<br>';
              //import into database
              $month++;
              if(12 < $month){
                $month = $month - 12;
                $year = $year + 1;
              }
              $yearCompare = $year + ($month/12);
              $yearEndCompare = $endYear + ($endMonth/12);
            }
          }
        }
        fclose($file);
      }
      else{
        die('can not open file!');
        //redirect to error page
      }
    }
    else{
      echo 'motherfucker';
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
