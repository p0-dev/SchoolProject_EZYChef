<?php
define("AccessAllowance", true);
require_once 'libs/view.php';

$test = new view();

$arr = array();
$arr[0] = 'what the fuck';
echo count($arr);
$test->redirectInput('errorView
', 'defaultView', 'what the fuck');
