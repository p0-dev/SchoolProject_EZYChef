<?php
//CHECKING DIRECT ACCESS FROM USERS
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

class sale_cost_unit{
  private $product_id;
  private $record_time;
  private $sale_cost_unit;
  private $description;

  /**/
  function __construct($product_id, $record_time, $sale_cost_unit, $description){
    $this->product_id = $product_id;
    $this->record_time = $record_time;
    $this->sale_cost_unit = $sale_cost_unit;
    $this->description = $description;
  }

  /**/
  public function getProductId(){
      return $this->product_id;
  }

  /**/
  public function setProductId($product_id){
      $this->product_id = $product_id;

      return $this;
  }

  /**/
  public function getRecordTime(){
      return $this->record_time;
  }

  /**/
  public function setRecordTime($record_time){
      $this->record_time = $record_time;

      return $this;
  }

  /**/
  public function getSaleCostUnit(){
      return $this->$sale_cost_unit;
  }

  /**/
  public function setSaleCostUnit($sale_cost_unit){
      $this->$sale_cost_unit = $sale_cost_unit;
      return $this;
  }

  /**/
  public function getDescription(){
      return $this->description;
  }

  /**/
  public function setDescription($description){
      $this->description = $description;

      return $this;
  }

  /**/
  function display(){
    echo 'id = ' . $this->product_id . '<br>';
    echo 'record_time = ' . $this->record_time . '<br>';
    echo 'sale_cost_unit = ' . $this->sale_cost_unit . '<br>';
    echo 'description = ' . $this->description . '<br>';
  }

  /**/

}

?>
