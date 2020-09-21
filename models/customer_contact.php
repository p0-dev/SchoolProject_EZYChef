<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class customer_contact{
    private $customer_contact_id;
    private $customer_id;
    private $customer_contact_type;
    private $customer_contact_value;
    private $customer_contact_person;
    private $customer_contact_description;
    /**
     * Get the value of Customer Contact Id
     *
     * @return mixed
     */
    public function getCustomerContactId()
    {
        return $this->customer_contact_id;
    }

    /**
     * Set the value of Customer Contact Id
     *
     * @param mixed $customer_contact_id
     *
     * @return self
     */
    public function setCustomerContactId($customer_contact_id)
    {
        $this->customer_contact_id = $customer_contact_id;

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
     * Get the value of Customer Contact Type
     *
     * @return mixed
     */
    public function getCustomerContactType()
    {
        return $this->customer_contact_type;
    }

    /**
     * Set the value of Customer Contact Type
     *
     * @param mixed $customer_contact_type
     *
     * @return self
     */
    public function setCustomerContactType($customer_contact_type)
    {
        $this->customer_contact_type = $customer_contact_type;

        return $this;
    }

    /**
     * Get the value of Customer Contact Value
     *
     * @return mixed
     */
    public function getCustomerContactValue()
    {
        return $this->customer_contact_value;
    }

    /**
     * Set the value of Customer Contact Value
     *
     * @param mixed $customer_contact_value
     *
     * @return self
     */
    public function setCustomerContactValue($customer_contact_value)
    {
        $this->customer_contact_value = $customer_contact_value;

        return $this;
    }

    /**
     * Get the value of Customer Contact Person
     *
     * @return mixed
     */
    public function getCustomerContactPerson()
    {
        return $this->customer_contact_person;
    }

    /**
     * Set the value of Customer Contact Person
     *
     * @param mixed $customer_contact_person
     *
     * @return self
     */
    public function setCustomerContactPerson($customer_contact_person)
    {
        $this->customer_contact_person = $customer_contact_person;

        return $this;
    }

    /**
     * Get the value of Customer Contact Description
     *
     * @return mixed
     */
    public function getCustomerContactDescription()
    {
        return $this->customer_contact_description;
    }

    /**
     * Set the value of Customer Contact Description
     *
     * @param mixed $customer_contact_description
     *
     * @return self
     */
    public function setCustomerContactDescription($customer_contact_description)
    {
        $this->customer_contact_description = $customer_contact_description;

        return $this;
    }

}
 ?>
