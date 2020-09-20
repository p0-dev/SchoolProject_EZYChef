<?php
  class recipe{
    private $product_id;
    private $raw_material_id;
    private $product_raw_material_description;
    /**
     * Get the value of Product Id
     *
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set the value of Product Id
     *
     * @param mixed $product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

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
     * Get the value of Product Raw Material Description
     *
     * @return mixed
     */
    public function getProductRawMaterialDescription()
    {
        return $this->product_raw_material_description;
    }

    /**
     * Set the value of Product Raw Material Description
     *
     * @param mixed $product_raw_material_description
     *
     * @return self
     */
    public function setProductRawMaterialDescription($product_raw_material_description)
    {
        $this->product_raw_material_description = $product_raw_material_description;

        return $this;
    }

}
 ?>
