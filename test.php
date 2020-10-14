<?php
define("AccessAllowance", true);
echo 'test' . '<br>';

require_once 'libs/database_connection.php';
require_once 'models/products.php';
require_once 'models/unit_sales.php';
require_once 'models/sale_cost.php';
require_once 'models/sale_cost_unit.php';

$con = new databaseConnection();
$con->connect();
$con->insertArrUnitSale('11');
$con->close();
echo 'end test'.'<br>';
