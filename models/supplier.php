<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  class supplier{
    private $supplier_id;
    private $supplier_name;
    private $supplier_address;
    private $supplier_state;
    private $supplier_region;
    private $supplier_activation_status;
    private $supplier_description;
  }
 ?>
