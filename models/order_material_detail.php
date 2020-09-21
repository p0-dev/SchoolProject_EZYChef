<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class order_material_detail{
    private $order_detail_product_raw_material_id;
    private $customer_order_detail_id;
    private $raw_material_batch_id;
    private $order_raw_material_quantity;
    private $order_detail_product_material_description;
    /**
     * Get the value of Order Detail Product Raw Material Id
     *
     * @return mixed
     */
    public function getOrderDetailProductRawMaterialId()
    {
        return $this->order_detail_product_raw_material_id;
    }

    /**
     * Set the value of Order Detail Product Raw Material Id
     *
     * @param mixed $order_detail_product_raw_material_id
     *
     * @return self
     */
    public function setOrderDetailProductRawMaterialId($order_detail_product_raw_material_id)
    {
        $this->order_detail_product_raw_material_id = $order_detail_product_raw_material_id;

        return $this;
    }

    /**
     * Get the value of Customer Order Detail Id
     *
     * @return mixed
     */
    public function getCustomerOrderDetailId()
    {
        return $this->customer_order_detail_id;
    }

    /**
     * Set the value of Customer Order Detail Id
     *
     * @param mixed $customer_order_detail_id
     *
     * @return self
     */
    public function setCustomerOrderDetailId($customer_order_detail_id)
    {
        $this->customer_order_detail_id = $customer_order_detail_id;

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
     * Get the value of Order Raw Material Quantity
     *
     * @return mixed
     */
    public function getOrderRawMaterialQuantity()
    {
        return $this->order_raw_material_quantity;
    }

    /**
     * Set the value of Order Raw Material Quantity
     *
     * @param mixed $order_raw_material_quantity
     *
     * @return self
     */
    public function setOrderRawMaterialQuantity($order_raw_material_quantity)
    {
        $this->order_raw_material_quantity = $order_raw_material_quantity;

        return $this;
    }

    /**
     * Get the value of Order Detail Product Material Description
     *
     * @return mixed
     */
    public function getOrderDetailProductMaterialDescription()
    {
        return $this->order_detail_product_material_description;
    }

    /**
     * Set the value of Order Detail Product Material Description
     *
     * @param mixed $order_detail_product_material_description
     *
     * @return self
     */
    public function setOrderDetailProductMaterialDescription($order_detail_product_material_description)
    {
        $this->order_detail_product_material_description = $order_detail_product_material_description;

        return $this;
    }

}
 ?>
