<?php
//CHECKING DIRECT ACCESS FROM USERS
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}

/*
CLASS PRODUCT
 */
class products{
  private $id;
  private $description;

  public __construct($id, $description){
    $this->id = $id;
    $this->description = $description;
  }

  public function getId()
  {
      return $this->id;
  }

  public function setId($id)
  {
      $this->id = $id;
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

}

 ?>
