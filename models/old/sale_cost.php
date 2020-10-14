<?php
//CHECKING DIRECT ACCESS FROM USERS
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

class sale_cost{
  private $product_id;
  private $record_time;
  private $sale_cost;
  private $description;

  /**/
  function __construct($product_id, $record_time, $sale_cost, $description){
    $this->product_id = $product_id;
    $this->record_time = $record_time;
    $this->sale_cost = $sale_cost;
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
  public function getSaleCost(){
      return $this->sale_cost;
  }

  /**/
  public function setSaleCost($sale_cost){
      $this->sale_cost = $sale_cost;
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
    echo 'sale_cost = ' . $this->sale_cost . '<br>';
    echo 'description = ' . $this->description . '<br>';
  }

  /**/

}
