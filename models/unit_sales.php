<?php
//CHECKING DIRECT ACCESS FROM USERS
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

/**
 *
 */
class unit_sales{
  private $product_id;
  private $record_time;
  private $sale_unit;
  private $description;

  function __construct($product_id, $record_time, $sale_unit, $description){
    $this->product_id = $product_id;
    $this->record_time = $record_time;
    $this->sale_unit = $sale_unit;
    $this->description = $description;
  }

  public function getProductId()
  {
      return $this->product_id;
  }

  public function setProductId($product_id)
  {
      $this->product_id = $product_id;
      return $this;
  }

  public function getRecordTime()
  {
      return $this->record_time;
  }

  public function setRecordTime($record_time)
  {
      $this->record_time = $record_time;
      return $this;
  }

  public function getSaleUnit()
  {
      return $this->sale_unit;
  }

  public function setSaleUnit($sale_unit)
  {
      $this->sale_unit = $sale_unit;
      return $this;
  }

  public function getDescription()
  {
      return $this->description;
  }

  public function setDescription($description)
  {
      $this->description = $description;
      return $this;
  }

  /**/
  public function display(){
    echo 'id = ' . $this->product_id . '<br>';
    echo 'time = ' . $this->record_time . '<br>';
    echo 'unit = ' . $this->sale_unit . '<br>';
    echo 'description = ' . $this->description . '<br>';
  }

  /**/
  public function test(){
    echo 'unit sales model - test';
  }

  /**/

}
?>
