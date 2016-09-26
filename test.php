<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
date_default_timezone_set('Europe/Stockholm');

$date= new DateTime('NOW');
$date_to_push = $date->format('Y-m-d H:i:s');
echo $date_to_push;
?>