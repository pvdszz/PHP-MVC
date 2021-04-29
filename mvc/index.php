<?php
session_start();
require_once "./mvc/Bridge.php";
$controller = new Controller();
$controller->check_status();
?>

