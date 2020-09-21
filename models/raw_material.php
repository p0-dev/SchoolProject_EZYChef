<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class raw_material{
    private $raw_material_id;
    private $raw_material_name;
    private $raw_material_duration;
    private $raw_material_duration_unit;
    private $raw_material_unit;
    private $raw_material_storing_instuction;
    private $raw_material_activation_status;
    private $raw_material_description;
    /**
     * Get the value of Raw Material Id
     *
     * @return mixed
     */
    public function getRawMaterialId()
    {
        return $this->raw_material_id;
    }

    /**
     * Set the value of Raw Material Id
     *
     * @param mixed $raw_material_id
     *
     * @return self
     */
    public function setRawMaterialId($raw_material_id)
    {
        $this->raw_material_id = $raw_material_id;

        return $this;
    }

    /**
     * Get the value of Raw Material Name
     *
     * @return mixed
     */
    public function getRawMaterialName()
    {
        return $this->raw_material_name;
    }

    /**
     * Set the value of Raw Material Name
     *
     * @param mixed $raw_material_name
     *
     * @return self
     */
    public function setRawMaterialName($raw_material_name)
    {
        $this->raw_material_name = $raw_material_name;

        return $this;
    }

    /**
     * Get the value of Raw Material Duration
     *
     * @return mixed
     */
    public function getRawMaterialDuration()
    {
        return $this->raw_material_duration;
    }

    /**
     * Set the value of Raw Material Duration
     *
     * @param mixed $raw_material_duration
     *
     * @return self
     */
    public function setRawMaterialDuration($raw_material_duration)
    {
        $this->raw_material_duration = $raw_material_duration;

        return $this;
    }

    /**
     * Get the value of Raw Material Duration Unit
     *
     * @return mixed
     */
    public function getRawMaterialDurationUnit()
    {
        return $this->raw_material_duration_unit;
    }

    /**
     * Set the value of Raw Material Duration Unit
     *
     * @param mixed $raw_material_duration_unit
     *
     * @return self
     */
    public function setRawMaterialDurationUnit($raw_material_duration_unit)
    {
        $this->raw_material_duration_unit = $raw_material_duration_unit;

        return $this;
    }

    /**
     * Get the value of Raw Material Unit
     *
     * @return mixed
     */
    public function getRawMaterialUnit()
    {
        return $this->raw_material_unit;
    }

    /**
     * Set the value of Raw Material Unit
     *
     * @param mixed $raw_material_unit
     *
     * @return self
     */
    public function setRawMaterialUnit($raw_material_unit)
    {
        $this->raw_material_unit = $raw_material_unit;

        return $this;
    }

    /**
     * Get the value of Raw Material Storing Instuction
     *
     * @return mixed
     */
    public function getRawMaterialStoringInstuction()
    {
        return $this->raw_material_storing_instuction;
    }

    /**
     * Set the value of Raw Material Storing Instuction
     *
     * @param mixed $raw_material_storing_instuction
     *
     * @return self
     */
    public function setRawMaterialStoringInstuction($raw_material_storing_instuction)
    {
        $this->raw_material_storing_instuction = $raw_material_storing_instuction;

        return $this;
    }

    /**
     * Get the value of Raw Material Activation Status
     *
     * @return mixed
     */
    public function getRawMaterialActivationStatus()
    {
        return $this->raw_material_activation_status;
    }

    /**
     * Set the value of Raw Material Activation Status
     *
     * @param mixed $raw_material_activation_status
     *
     * @return self
     */
    public function setRawMaterialActivationStatus($raw_material_activation_status)
    {
        $this->raw_material_activation_status = $raw_material_activation_status;

        return $this;
    }

    /**
     * Get the value of Raw Material Description
     *
     * @return mixed
     */
    public function getRawMaterialDescription()
    {
        return $this->raw_material_description;
    }

    /**
     * Set the value of Raw Material Description
     *
     * @param mixed $raw_material_description
     *
     * @return self
     */
    public function setRawMaterialDescription($raw_material_description)
    {
        $this->raw_material_description = $raw_material_description;

        return $this;
    }

}
 ?>
