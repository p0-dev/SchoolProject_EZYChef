<?php
  class product{
    private $product_id;
    private $product_name;
    private $product_reference_price;
    private $product_unit;
    private $product_type;
    private $product_activation_status;
    private $product_description;
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
     * Get the value of Product Name
     *
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * Set the value of Product Name
     *
     * @param mixed $product_name
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;

        return $this;
    }

    /**
     * Get the value of Product Reference Price
     *
     * @return mixed
     */
    public function getProductReferencePrice()
    {
        return $this->product_reference_price;
    }

    /**
     * Set the value of Product Reference Price
     *
     * @param mixed $product_reference_price
     *
     * @return self
     */
    public function setProductReferencePrice($product_reference_price)
    {
        $this->product_reference_price = $product_reference_price;

        return $this;
    }

    /**
     * Get the value of Product Unit
     *
     * @return mixed
     */
    public function getProductUnit()
    {
        return $this->product_unit;
    }

    /**
     * Set the value of Product Unit
     *
     * @param mixed $product_unit
     *
     * @return self
     */
    public function setProductUnit($product_unit)
    {
        $this->product_unit = $product_unit;

        return $this;
    }

    /**
     * Get the value of Product Type
     *
     * @return mixed
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     * Set the value of Product Type
     *
     * @param mixed $product_type
     *
     * @return self
     */
    public function setProductType($product_type)
    {
        $this->product_type = $product_type;

        return $this;
    }

    /**
     * Get the value of Product Activation Status
     *
     * @return mixed
     */
    public function getProductActivationStatus()
    {
        return $this->product_activation_status;
    }

    /**
     * Set the value of Product Activation Status
     *
     * @param mixed $product_activation_status
     *
     * @return self
     */
    public function setProductActivationStatus($product_activation_status)
    {
        $this->product_activation_status = $product_activation_status;

        return $this;
    }

    /**
     * Get the value of Product Description
     *
     * @return mixed
     */
    public function getProductDescription()
    {
        return $this->product_description;
    }

    /**
     * Set the value of Product Description
     *
     * @param mixed $product_description
     *
     * @return self
     */
    public function setProductDescription($product_description)
    {
        $this->product_description = $product_description;

        return $this;
    }


}
 ?>
