<?php
  class order_product_detail{
    private $customer_order_detail_id;
    private $product_id;
    private $customer_order_batch_id;
    private $order_product_quantity;
    private $customer_order_detail_price_per_unit;
    private $customer_order_detail_description;
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
     * Get the value of Customer Order Batch Id
     *
     * @return mixed
     */
    public function getCustomerOrderBatchId()
    {
        return $this->customer_order_batch_id;
    }

    /**
     * Set the value of Customer Order Batch Id
     *
     * @param mixed $customer_order_batch_id
     *
     * @return self
     */
    public function setCustomerOrderBatchId($customer_order_batch_id)
    {
        $this->customer_order_batch_id = $customer_order_batch_id;

        return $this;
    }

    /**
     * Get the value of Order Product Quantity
     *
     * @return mixed
     */
    public function getOrderProductQuantity()
    {
        return $this->order_product_quantity;
    }

    /**
     * Set the value of Order Product Quantity
     *
     * @param mixed $order_product_quantity
     *
     * @return self
     */
    public function setOrderProductQuantity($order_product_quantity)
    {
        $this->order_product_quantity = $order_product_quantity;

        return $this;
    }

    /**
     * Get the value of Customer Order Detail Price Per Unit
     *
     * @return mixed
     */
    public function getCustomerOrderDetailPricePerUnit()
    {
        return $this->customer_order_detail_price_per_unit;
    }

    /**
     * Set the value of Customer Order Detail Price Per Unit
     *
     * @param mixed $customer_order_detail_price_per_unit
     *
     * @return self
     */
    public function setCustomerOrderDetailPricePerUnit($customer_order_detail_price_per_unit)
    {
        $this->customer_order_detail_price_per_unit = $customer_order_detail_price_per_unit;

        return $this;
    }

    /**
     * Get the value of Customer Order Detail Description
     *
     * @return mixed
     */
    public function getCustomerOrderDetailDescription()
    {
        return $this->customer_order_detail_description;
    }

    /**
     * Set the value of Customer Order Detail Description
     *
     * @param mixed $customer_order_detail_description
     *
     * @return self
     */
    public function setCustomerOrderDetailDescription($customer_order_detail_description)
    {
        $this->customer_order_detail_description = $customer_order_detail_description;

        return $this;
    }

}
 ?>
