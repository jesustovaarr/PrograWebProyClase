<?php
require_once("models/investigador.php");
include_once("./views/header.php");
$app = new Investigador();
$investigadores = $app -> read();
include_once("./views/investigador/index.php");
include_once("./views/footer.php");
?>