<?php
echo 'test' . '<br>';


require_once 'libs/customTime.php';

$startMonth = '07';
$startYear = '2019';
$endMonth = '04';
$endYear = '2020';

$startTime = new customTime($startYear, $startMonth);
$endTime = new customTime($endYear, $endMonth);

$startTime->display();
$endTime->display();

echo $startTime->getMonth();





echo 'end test'.'<br>';
