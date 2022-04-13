<?php
require_once('storeclas.php');
$store->logout();
header("location: index.php");

?>