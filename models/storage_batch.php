<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class storage_batch{
    private $raw_material_batch_id;
    private $raw_material_id;
    private $raw_material_storage_import_date;
    private $raw_material_storage_expired_date;
    private $raw_material_average_cost_per_unit;
    private $raw_material_total_batch_cost;
    private $raw_material_total_import_quantity;
    private $raw_material_current_quantity;
    private $raw_material_batch_description;
    /**
     * Get the value of Raw Material Batch Id
     *
     * @return mixed
     */
    public function getRawMaterialBatchId()
    {
        return $this->raw_material_batch_id;
    }

    /**
     * Set the value of Raw Material Batch Id
     *
     * @param mixed $raw_material_batch_id
     *
     * @return self
     */
    public function setRawMaterialBatchId($raw_material_batch_id)
    {
        $this->raw_material_batch_id = $raw_material_batch_id;

        return $this;
    }

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
     * Get the value of Raw Material Storage Import Date
     *
     * @return mixed
     */
    public function getRawMaterialStorageImportDate()
    {
        return $this->raw_material_storage_import_date;
    }

    /**
     * Set the value of Raw Material Storage Import Date
     *
     * @param mixed $raw_material_storage_import_date
     *
     * @return self
     */
    public function setRawMaterialStorageImportDate($raw_material_storage_import_date)
    {
        $this->raw_material_storage_import_date = $raw_material_storage_import_date;

        return $this;
    }

    /**
     * Get the value of Raw Material Storage Expired Date
     *
     * @return mixed
     */
    public function getRawMaterialStorageExpiredDate()
    {
        return $this->raw_material_storage_expired_date;
    }

    /**
     * Set the value of Raw Material Storage Expired Date
     *
     * @param mixed $raw_material_storage_expired_date
     *
     * @return self
     */
    public function setRawMaterialStorageExpiredDate($raw_material_storage_expired_date)
    {
        $this->raw_material_storage_expired_date = $raw_material_storage_expired_date;

        return $this;
    }

    /**
     * Get the value of Raw Material Average Cost Per Unit
     *
     * @return mixed
     */
    public function getRawMaterialAverageCostPerUnit()
    {
        return $this->raw_material_average_cost_per_unit;
    }

    /**
     * Set the value of Raw Material Average Cost Per Unit
     *
     * @param mixed $raw_material_average_cost_per_unit
     *
     * @return self
     */
    public function setRawMaterialAverageCostPerUnit($raw_material_average_cost_per_unit)
    {
        $this->raw_material_average_cost_per_unit = $raw_material_average_cost_per_unit;

        return $this;
    }

    /**
     * Get the value of Raw Material Total Batch Cost
     *
     * @return mixed
     */
    public function getRawMaterialTotalBatchCost()
    {
        return $this->raw_material_total_batch_cost;
    }

    /**
     * Set the value of Raw Material Total Batch Cost
     *
     * @param mixed $raw_material_total_batch_cost
     *
     * @return self
     */
    public function setRawMaterialTotalBatchCost($raw_material_total_batch_cost)
    {
        $this->raw_material_total_batch_cost = $raw_material_total_batch_cost;

        return $this;
    }

    /**
     * Get the value of Raw Material Total Import Quantity
     *
     * @return mixed
     */
    public function getRawMaterialTotalImportQuantity()
    {
        return $this->raw_material_total_import_quantity;
    }

    /**
     * Set the value of Raw Material Total Import Quantity
     *
     * @param mixed $raw_material_total_import_quantity
     *
     * @return self
     */
    public function setRawMaterialTotalImportQuantity($raw_material_total_import_quantity)
    {
        $this->raw_material_total_import_quantity = $raw_material_total_import_quantity;

        return $this;
    }

    /**
     * Get the value of Raw Material Current Quantity
     *
     * @return mixed
     */
    public function getRawMaterialCurrentQuantity()
    {
        return $this->raw_material_current_quantity;
    }

    /**
     * Set the value of Raw Material Current Quantity
     *
     * @param mixed $raw_material_current_quantity
     *
     * @return self
     */
    public function setRawMaterialCurrentQuantity($raw_material_current_quantity)
    {
        $this->raw_material_current_quantity = $raw_material_current_quantity;

        return $this;
    }

    /**
     * Get the value of Raw Material Batch Description
     *
     * @return mixed
     */
    public function getRawMaterialBatchDescription()
    {
        return $this->raw_material_batch_description;
    }

    /**
     * Set the value of Raw Material Batch Description
     *
     * @param mixed $raw_material_batch_description
     *
     * @return self
     */
    public function setRawMaterialBatchDescription($raw_material_batch_description)
    {
        $this->raw_material_batch_description = $raw_material_batch_description;

        return $this;
    }

}
 ?>
