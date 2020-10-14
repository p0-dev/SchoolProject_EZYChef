<?php
class sale_cost{
  private $product_id;
  private $record_time;
  private $value;
  private $description;

  /**/
  function __construct($product_id, $record_time, $value){
    $this->product_id = $product_id;
    $this->record_time = $record_time;
    $this->value = $value;
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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;

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
    function display(){
      echo 'product_id: ' . $this->product_id . '<br>';
      echo 'record_time: ' . $this->record_time . '<br>';
      echo 'value: ' . $this->value . '<br>';
    }

    /**/

}
