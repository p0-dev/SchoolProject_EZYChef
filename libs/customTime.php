<?php
//checking direct access not through router

class customTime{
  private $realYear;
  private $realMonth;
  private $compareTime;

  /**/
  function updateCompareTime(){
    $this->compareTime = floatval($this->realYear + ($this->realMonth/12));
  }

  /**/
  function __construct($realYear, $realMonth){
    $this->realYear = floatval($realYear);
    $this->realMonth = floatval($realMonth);
    $this->updateCompareTime();
  }

  /**/
  function display(){
    echo 'year = ' . $this->realYear . '<br>';
    echo 'month = ' . $this->realMonth . '<br>';
    echo 'compare time = ' . $this->compareTime . '<br>';
  }

  /**/
  function increaseMonth($input){
    $input = intval($input);
    $this->realMonth += $input;
    if(12 < $this->realMonth){
      $this->realMonth -= 12;
      $this->realYear += 1;
    }
    $this->updateCompareTime();
  }

  /**/
  function getCompareTime(){
    return $this->compareTime;
  }

  /**/
  function displayTime(){
    return $this->realYear . '-' . $this->realMonth;
  }

  /**/
  function getYear(){
    return $this->realYear;
  }

  /**/
  function getMonth(){
    return $this->realMonth;
  }

  /**/
  function returnTimeToSQL(){
    $tmp = $this->realYear . '-' . $this->realMonth . '-' . '01';
    return $tmp;
  }

}
