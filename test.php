<?php
define("AccessAllowance", true);
echo 'test' . '<br>';

require_once 'libs/database_connection.php';
//require_once 'controllers/importController.php';

$db = new databaseConnection();
$db->connect();

echo $db->searchProductById('CPAsep-Plum200');

$db->close();



echo 'test end' . '<br>';
