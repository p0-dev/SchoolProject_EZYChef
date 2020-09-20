<?php
  class storage_detail{
    private $raw_material_storage_detail_id;
    private $raw_material_batch_id;
    private $supplier_id;
    private $raw_material_cost_per_unit;
    private $raw_material_import_quantity;
    private $raw_material_storage_detail_description;
    /**
     * Get the value of Raw Material Storage Detail Id
     *
     * @return mixed
     */
    public function getRawMaterialStorageDetailId()
    {
        return $this->raw_material_storage_detail_id;
    }

    /**
     * Set the value of Raw Material Storage Detail Id
     *
     * @param mixed $raw_material_storage_detail_id
     *
     * @return self
     */
    public function setRawMaterialStorageDetailId($raw_material_storage_detail_id)
    {
        $this->raw_material_storage_detail_id = $raw_material_storage_detail_id;

        return $this;
    }

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
     * Get the value of Supplier Id
     *
     * @return mixed
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * Set the value of Supplier Id
     *
     * @param mixed $supplier_id
     *
     * @return self
     */
    public function setSupplierId($supplier_id)
    {
        $this->supplier_id = $supplier_id;

        return $this;
    }

    /**
     * Get the value of Raw Material Cost Per Unit
     *
     * @return mixed
     */
    public function getRawMaterialCostPerUnit()
    {
        return $this->raw_material_cost_per_unit;
    }

    /**
     * Set the value of Raw Material Cost Per Unit
     *
     * @param mixed $raw_material_cost_per_unit
     *
     * @return self
     */
    public function setRawMaterialCostPerUnit($raw_material_cost_per_unit)
    {
        $this->raw_material_cost_per_unit = $raw_material_cost_per_unit;

        return $this;
    }

    /**
     * Get the value of Raw Material Import Quantity
     *
     * @return mixed
     */
    public function getRawMaterialImportQuantity()
    {
        return $this->raw_material_import_quantity;
    }

    /**
     * Set the value of Raw Material Import Quantity
     *
     * @param mixed $raw_material_import_quantity
     *
     * @return self
     */
    public function setRawMaterialImportQuantity($raw_material_import_quantity)
    {
        $this->raw_material_import_quantity = $raw_material_import_quantity;

        return $this;
    }

    /**
     * Get the value of Raw Material Storage Detail Description
     *
     * @return mixed
     */
    public function getRawMaterialStorageDetailDescription()
    {
        return $this->raw_material_storage_detail_description;
    }

    /**
     * Set the value of Raw Material Storage Detail Description
     *
     * @param mixed $raw_material_storage_detail_description
     *
     * @return self
     */
    public function setRawMaterialStorageDetailDescription($raw_material_storage_detail_description)
    {
        $this->raw_material_storage_detail_description = $raw_material_storage_detail_description;

        return $this;
    }

}
 ?>
