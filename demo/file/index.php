<?php

$filename = dirname(__FILE__).'/../classes/Bicycle.php';
$handle = fopen($filename, 'r');
var_dump(pathinfo($filename));
var_dump(file_get_contents($filename));
var_dump(fread($handle, 100));
fclose($handle);