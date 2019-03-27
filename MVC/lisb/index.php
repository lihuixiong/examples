<?php
require_once('function.php');

$controller = $_GET['controller'];
$method = $_GET['method'];
C($controller, $method);
