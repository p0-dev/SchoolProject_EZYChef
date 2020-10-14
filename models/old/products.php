<?php
//checking direct access through router
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}
class products{
  private $id;
  private $description;

  /**/
  public function __construct($id, $description){
    $this->id = $id;
    $this->description = $description;
  }

  /**/
  public function getId(){
      return $this->id;
  }

  /**/
  public function setId($id){
      $this->id = $id;
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
    echo 'id = ' . $this->id . '<br>';
    echo 'des = ' . $this->description . '<br>';
  }

  /**/

}

 ?>
