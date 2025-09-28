<?php
require_once("institucion.php");
$app = new Institucion();
// Prueba del Delete
    //$filas = $app -> delete(4);

// Prueba del Create
    //$data ['institucion'] = "Institucion de prueba";
    //$data ['logotipo'] = "logotipo_prueba.png";
    //$filas = $app -> create($data);
    //print_r($filas);

// Prueba del Update
$data ['institucion'] = "Institucion de prueba 2";
$data ['logotipo'] = "logotipo_prueba2.png";
$filas = $app -> update($data,6);
print_r($filas);
?>