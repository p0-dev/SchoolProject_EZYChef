<?php
  class product_fixed_cost{
    private $product_fixed_cost_id;
    private $product_id;
    private $product_fixed_cost_name;
    private $product_fixed_cost_value;
    private $product_fixed_cost_description;
    /**
     * Get the value of Product Fixed Cost Id
     *
     * @return mixed
     */
    public function getProductFixedCostId()
    {
        return $this->product_fixed_cost_id;
    }

    /**
     * Set the value of Product Fixed Cost Id
     *
     * @param mixed $product_fixed_cost_id
     *
     * @return self
     */
    public function setProductFixedCostId($product_fixed_cost_id)
    {
        $this->product_fixed_cost_id = $product_fixed_cost_id;

        return $this;
    }

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
     * Get the value of Product Fixed Cost Name
     *
     * @return mixed
     */
    public function getProductFixedCostName()
    {
        return $this->product_fixed_cost_name;
    }

    /**
     * Set the value of Product Fixed Cost Name
     *
     * @param mixed $product_fixed_cost_name
     *
     * @return self
     */
    public function setProductFixedCostName($product_fixed_cost_name)
    {
        $this->product_fixed_cost_name = $product_fixed_cost_name;

        return $this;
    }

    /**
     * Get the value of Product Fixed Cost Value
     *
     * @return mixed
     */
    public function getProductFixedCostValue()
    {
        return $this->product_fixed_cost_value;
    }

    /**
     * Set the value of Product Fixed Cost Value
     *
     * @param mixed $product_fixed_cost_value
     *
     * @return self
     */
    public function setProductFixedCostValue($product_fixed_cost_value)
    {
        $this->product_fixed_cost_value = $product_fixed_cost_value;

        return $this;
    }

    /**
     * Get the value of Product Fixed Cost Description
     *
     * @return mixed
     */
    public function getProductFixedCostDescription()
    {
        return $this->product_fixed_cost_description;
    }

    /**
     * Set the value of Product Fixed Cost Description
     *
     * @param mixed $product_fixed_cost_description
     *
     * @return self
     */
    public function setProductFixedCostDescription($product_fixed_cost_description)
    {
        $this->product_fixed_cost_description = $product_fixed_cost_description;

        return $this;
    }

}
 ?>
