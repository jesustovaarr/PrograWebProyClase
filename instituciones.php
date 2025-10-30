<?php
require_once("./models/institucion.php");
include_once("./views/header.php");
$app = new Institucion;
//$instituciones = $app -> readOne(1);
$instituciones = $app -> read();
include_once("./views/institucion/index.php");
include_once("./views/footer.php");
?>