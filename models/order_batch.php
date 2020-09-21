<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class order_batch{
    private $customer_order_batch_id;
    private $customer_order_id;
    private $order_batch_expected_delivery_date;
    private $total_order_batch_price;
    private $order_batch_status;
    private $order_batch_description;
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
     * Get the value of Customer Order Id
     *
     * @return mixed
     */
    public function getCustomerOrderId()
    {
        return $this->customer_order_id;
    }

    /**
     * Set the value of Customer Order Id
     *
     * @param mixed $customer_order_id
     *
     * @return self
     */
    public function setCustomerOrderId($customer_order_id)
    {
        $this->customer_order_id = $customer_order_id;

        return $this;
    }

    /**
     * Get the value of Order Batch Expected Delivery Date
     *
     * @return mixed
     */
    public function getOrderBatchExpectedDeliveryDate()
    {
        return $this->order_batch_expected_delivery_date;
    }

    /**
     * Set the value of Order Batch Expected Delivery Date
     *
     * @param mixed $order_batch_expected_delivery_date
     *
     * @return self
     */
    public function setOrderBatchExpectedDeliveryDate($order_batch_expected_delivery_date)
    {
        $this->order_batch_expected_delivery_date = $order_batch_expected_delivery_date;

        return $this;
    }

    /**
     * Get the value of Total Order Batch Price
     *
     * @return mixed
     */
    public function getTotalOrderBatchPrice()
    {
        return $this->total_order_batch_price;
    }

    /**
     * Set the value of Total Order Batch Price
     *
     * @param mixed $total_order_batch_price
     *
     * @return self
     */
    public function setTotalOrderBatchPrice($total_order_batch_price)
    {
        $this->total_order_batch_price = $total_order_batch_price;

        return $this;
    }

    /**
     * Get the value of Order Batch Status
     *
     * @return mixed
     */
    public function getOrderBatchStatus()
    {
        return $this->order_batch_status;
    }

    /**
     * Set the value of Order Batch Status
     *
     * @param mixed $order_batch_status
     *
     * @return self
     */
    public function setOrderBatchStatus($order_batch_status)
    {
        $this->order_batch_status = $order_batch_status;

        return $this;
    }

    /**
     * Get the value of Order Batch Description
     *
     * @return mixed
     */
    public function getOrderBatchDescription()
    {
        return $this->order_batch_description;
    }

    /**
     * Set the value of Order Batch Description
     *
     * @param mixed $order_batch_description
     *
     * @return self
     */
    public function setOrderBatchDescription($order_batch_description)
    {
        $this->order_batch_description = $order_batch_description;

        return $this;
    }

}
 ?>
