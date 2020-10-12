<?php
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

$startTime = new customTime('2019', '7');
$endTime = new customTime('2020', '4');
echo $startTime->getCompareTime() . '<br>';
echo $endTime->getCompareTime() . '<br>';

for(;$startTime <= $endTime; $startTime->increaseMonth(1)){
  echo $startTime->display();
}
