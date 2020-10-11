<?php
session_start();
//checking session
//checking access through router

class importController extends mainController{

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
    $target_dir = '../uploads/';
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $fileName = $_FILES["fileToUpload"]["name"];
    $fileTmpName = $_FILES["fileToUpload"]["tmp_name"];
    $_SESSION['fileURL'] = $target_file;
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
    echo 'inside process';
  }

  /**/

}
