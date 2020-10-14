<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class customer{
    private $customer_id;
    private $customer_name;
    private $customer_ABN;
    private $customer_address;
    private $customer_activation_status;
    private $customer_description;

    public function getCustomerId()
    {
        return $this->customer_id;
    }

    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
    }

    public function getCustomerName()
    {
        return $this->customer_name;
    }

    public function setCustomerName($customer_name)
    {
        $this->customer_name = $customer_name;
        return $this;
    }

    public function getCustomerABN()
    {
        return $this->customer_ABN;
    }

    public function setCustomerABN($customer_ABN)
    {
        $this->customer_ABN = $customer_ABN;
        return $this;
    }

    public function getCustomerAddress()
    {
        return $this->customer_address;
    }

    public function setCustomerAddress($customer_address)
    {
        $this->customer_address = $customer_address;
        return $this;
    }

    public function getCustomerActivationStatus()
    {
        return $this->customer_activation_status;
    }

    public function setCustomerActivationStatus($customer_activation_status)
    {
        $this->customer_activation_status = $customer_activation_status;
        return $this;
    }

    public function getCustomerDescription()
    {
        return $this->customer_description;
    }

    public function setCustomerDescription($customer_description)
    {
        $this->customer_description = $customer_description;
        return $this;
    }
  }
?>
