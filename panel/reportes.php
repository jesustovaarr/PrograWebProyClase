<?php
require_once(__DIR__ . '/../models/sistema.php');
require_once(__DIR__ . '/../models/institucion.php');
require_once(__DIR__ . '/../models/reportes.php');
$app = new Reportes();
ob_start();
$action = isset($_GET['action']) ? $_GET['action'] : 'read';
switch ($action) {
    case 'InstitucionesInvestigadores':
        $app -> checarRol('Administrador');
        $app -> InstitucionesInvestigadores();
        break;

    case 'InstitucionesExcel':
        $app -> checarRol('Administrador');
        $rand = md5(rand(1000, 10000000));
        $app -> InstitucionesExcel('reporteInstituciones'.$rand);
        break;

    default:
        die();
        break;
}
?>