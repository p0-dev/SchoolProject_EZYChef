<?php
class product{
  private $product_id;
  private $description;

  /**/
  function __construct($product_id, $description){
    $this->product_id = $product_id;
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

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getEditFlag()
    {
        return $this->edit_flag;
    }

    public function setEditFlag($edit_flag)
    {
        $this->edit_flag = $edit_flag;

        return $this;
    }

    /**/
    function display(){
      echo 'product_id: ' . $this->product_id . '<br>';
      echo 'product description: ' . $this->description . '<br>';
    }

}
