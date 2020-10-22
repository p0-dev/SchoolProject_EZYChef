<?php
class material{
  private $material_id;
  private $description;

  /**/
  function __construct($material_id, $description){
    $this->$material_id = $material_id;
    $this->description = $description;
  }

    public function getMaterialId()
    {
        return $this->$material_id;
    }

    public function setMaterialId($material_id)
    {
        $this->$material_id = $material_id;

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
      echo 'material_id: ' . $this->$material_id . '<br>';
      echo 'product description: ' . $this->description . '<br>';
    }

}
