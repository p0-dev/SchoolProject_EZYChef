<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class supplier_contact{
    private $supplier_contact_id;
    private $supplier_id;
    private $supplier_contact_type;
    private $supplier_contact_value;
    private $supplier_contact_person;
    private $supplier_contact_detail_description;
    /**
     * Get the value of Supplier Contact Id
     *
     * @return mixed
     */
    public function getSupplierContactId()
    {
        return $this->supplier_contact_id;
    }

    /**
     * Set the value of Supplier Contact Id
     *
     * @param mixed $supplier_contact_id
     *
     * @return self
     */
    public function setSupplierContactId($supplier_contact_id)
    {
        $this->supplier_contact_id = $supplier_contact_id;

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
     * Get the value of Supplier Contact Type
     *
     * @return mixed
     */
    public function getSupplierContactType()
    {
        return $this->supplier_contact_type;
    }

    /**
     * Set the value of Supplier Contact Type
     *
     * @param mixed $supplier_contact_type
     *
     * @return self
     */
    public function setSupplierContactType($supplier_contact_type)
    {
        $this->supplier_contact_type = $supplier_contact_type;

        return $this;
    }

    /**
     * Get the value of Supplier Contact Value
     *
     * @return mixed
     */
    public function getSupplierContactValue()
    {
        return $this->supplier_contact_value;
    }

    /**
     * Set the value of Supplier Contact Value
     *
     * @param mixed $supplier_contact_value
     *
     * @return self
     */
    public function setSupplierContactValue($supplier_contact_value)
    {
        $this->supplier_contact_value = $supplier_contact_value;

        return $this;
    }

    /**
     * Get the value of Supplier Contact Person
     *
     * @return mixed
     */
    public function getSupplierContactPerson()
    {
        return $this->supplier_contact_person;
    }

    /**
     * Set the value of Supplier Contact Person
     *
     * @param mixed $supplier_contact_person
     *
     * @return self
     */
    public function setSupplierContactPerson($supplier_contact_person)
    {
        $this->supplier_contact_person = $supplier_contact_person;

        return $this;
    }

    /**
     * Get the value of Supplier Contact Detail Description
     *
     * @return mixed
     */
    public function getSupplierContactDetailDescription()
    {
        return $this->supplier_contact_detail_description;
    }

    /**
     * Set the value of Supplier Contact Detail Description
     *
     * @param mixed $supplier_contact_detail_description
     *
     * @return self
     */
    public function setSupplierContactDetailDescription($supplier_contact_detail_description)
    {
        $this->supplier_contact_detail_description = $supplier_contact_detail_description;

        return $this;
    }

}
 ?>
