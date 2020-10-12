<?php
//checking direct access not through router

class customTime{
  private $realYear; //string
  private $realMonth; //string
  private $compareTime; //double
  function __construct($realYear, $realMonth){
    $this->realYear = $realYear;
    $this->realMonth = $realMonth;
    $this->compareTime = $realYear + ($realMonth / 12);
  }
  function display(){
    echo 'year = ' . $this->realYear . '<br>';
    echo 'month = ' . $this->realMonth . '<br>';
    echo 'compare time = ' . $this->compareTime . '<br>';
  }
  function increaseMonth($input){
    $this->realMonth += $input;
    if(12 < $this->realMonth){
      $this->realMonth -= 12;
      $this->realYear += 1;
      $this->compareTime = $this->realYear + ($this->realMonth / 12);
    }
  }
  function getCompareTime(){
    return $this->compareTime;
  }
}
