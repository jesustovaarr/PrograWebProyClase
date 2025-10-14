<?php
require_once("models/sistema.php");
$sistema = new Sistema();
$login = $sistema -> logout();
var_dump($login);
?>