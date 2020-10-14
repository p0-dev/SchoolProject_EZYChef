<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class customer_order{
    private $customer_order_id;
    private $customer_id;
    private $placed_order_date;
    private $customer_order_payment_method;
    private $order_expected_payment_date;
    private $total_order_price;
    private $order_deposit_amount;
    private $customer_order_start_date;
    private $customer_order_end_date;
    private $order_status;
    private $order_description;
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
     * Get the value of Customer Id
     *
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Set the value of Customer Id
     *
     * @param mixed $customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * Get the value of Placed Order Date
     *
     * @return mixed
     */
    public function getPlacedOrderDate()
    {
        return $this->placed_order_date;
    }

    /**
     * Set the value of Placed Order Date
     *
     * @param mixed $placed_order_date
     *
     * @return self
     */
    public function setPlacedOrderDate($placed_order_date)
    {
        $this->placed_order_date = $placed_order_date;

        return $this;
    }

    /**
     * Get the value of Customer Order Payment Method
     *
     * @return mixed
     */
    public function getCustomerOrderPaymentMethod()
    {
        return $this->customer_order_payment_method;
    }

    /**
     * Set the value of Customer Order Payment Method
     *
     * @param mixed $customer_order_payment_method
     *
     * @return self
     */
    public function setCustomerOrderPaymentMethod($customer_order_payment_method)
    {
        $this->customer_order_payment_method = $customer_order_payment_method;

        return $this;
    }

    /**
     * Get the value of Order Expected Payment Date
     *
     * @return mixed
     */
    public function getOrderExpectedPaymentDate()
    {
        return $this->order_expected_payment_date;
    }

    /**
     * Set the value of Order Expected Payment Date
     *
     * @param mixed $order_expected_payment_date
     *
     * @return self
     */
    public function setOrderExpectedPaymentDate($order_expected_payment_date)
    {
        $this->order_expected_payment_date = $order_expected_payment_date;

        return $this;
    }

    /**
     * Get the value of Total Order Price
     *
     * @return mixed
     */
    public function getTotalOrderPrice()
    {
        return $this->total_order_price;
    }

    /**
     * Set the value of Total Order Price
     *
     * @param mixed $total_order_price
     *
     * @return self
     */
    public function setTotalOrderPrice($total_order_price)
    {
        $this->total_order_price = $total_order_price;

        return $this;
    }

    /**
     * Get the value of Order Deposit Amount
     *
     * @return mixed
     */
    public function getOrderDepositAmount()
    {
        return $this->order_deposit_amount;
    }

    /**
     * Set the value of Order Deposit Amount
     *
     * @param mixed $order_deposit_amount
     *
     * @return self
     */
    public function setOrderDepositAmount($order_deposit_amount)
    {
        $this->order_deposit_amount = $order_deposit_amount;

        return $this;
    }

    /**
     * Get the value of Customer Order Start Date
     *
     * @return mixed
     */
    public function getCustomerOrderStartDate()
    {
        return $this->customer_order_start_date;
    }

    /**
     * Set the value of Customer Order Start Date
     *
     * @param mixed $customer_order_start_date
     *
     * @return self
     */
    public function setCustomerOrderStartDate($customer_order_start_date)
    {
        $this->customer_order_start_date = $customer_order_start_date;

        return $this;
    }

    /**
     * Get the value of Customer Order End Date
     *
     * @return mixed
     */
    public function getCustomerOrderEndDate()
    {
        return $this->customer_order_end_date;
    }

    /**
     * Set the value of Customer Order End Date
     *
     * @param mixed $customer_order_end_date
     *
     * @return self
     */
    public function setCustomerOrderEndDate($customer_order_end_date)
    {
        $this->customer_order_end_date = $customer_order_end_date;

        return $this;
    }

    /**
     * Get the value of Order Status
     *
     * @return mixed
     */
    public function getOrderStatus()
    {
        return $this->order_status;
    }

    /**
     * Set the value of Order Status
     *
     * @param mixed $order_status
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        $this->order_status = $order_status;

        return $this;
    }

    /**
     * Get the value of Order Description
     *
     * @return mixed
     */
    public function getOrderDescription()
    {
        return $this->order_description;
    }

    /**
     * Set the value of Order Description
     *
     * @param mixed $order_description
     *
     * @return self
     */
    public function setOrderDescription($order_description)
    {
        $this->order_description = $order_description;

        return $this;
    }

}
 ?>
