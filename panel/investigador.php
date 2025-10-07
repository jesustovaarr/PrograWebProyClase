<?php
require_once("../models/investigador.php");
require_once("../models/institucion.php");
require_once("../models/tratamiento.php");
$app = new Investigador();
$appInstitucion = new Institucion();
$appTratamiento = new Tratamiento();
$instituciones = $appInstitucion -> read();
$tratamientos = $appTratamiento -> read();
$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$data = array();
include_once("./views/header.php");
switch ($action) {
    case 'create':
        if (isset($_POST['enviar'])) {
            $data['primer_apellido'] = $_POST['primer_apellido'];
            $data['segundo_apellido'] = $_POST['segundo_apellido'];
            $data['nombre'] = $_POST['nombre'];
            $data['semblanza'] = $_POST['semblanza'];
            $data['id_institucion'] = $_POST['id_institucion'];
            $data['id_tratamiento'] = $_POST['id_tratamiento'];
            $filas = $app-> create($data);
            if ($filas) {
                $alerta['mensaje'] = "Investigador dado de alta correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else {
                $alerta['mensaje'] = "El investigador no fue dado de alta";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");
            }
            $data = $app-> read();
            include_once("./views/investigador/index.php");
        } else {
            include_once("./views/investigador/_form.php");
        }
        break;

    case 'update':
        if (isset($_POST['enviar'])) {
            $data['primer_apellido'] = $_POST['primer_apellido'];
            $data['segundo_apellido'] = $_POST['segundo_apellido'];
            $data['nombre'] = $_POST['nombre'];
            $data['fotografia'] = $_POST['fotografia'];
            $data['semblanza'] = $_POST['semblanza'];
            $data['id_institucion'] = $_POST['id_institucion'];
            $data['id_tratamiento'] = $_POST['id_tratamiento'];
            $id = $_GET['id'];
            $filas = $app-> update($data, $id);
            if ($filas) {
                $alerta['mensaje'] = "Investigador modificado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else {
                $alerta['mensaje'] = "El investigador no fue modificado";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");
            }            
            $data = $app-> read();
            include_once("./views/investigador/index.php");
        } else {
            $id = $_GET['id'];
            $data = $app-> readOne($id);
            include_once("./views/investigador/_form_update.php");
        }
        break;

    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $filas = $app-> delete($id);
            if ($filas) {
                $alerta['mensaje'] = "Investigador eliminado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else {
                $alerta['mensaje'] = "El investigador no fue eliminado";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");
            }            
        }
        $data = $app-> read();
        include_once("./views/investigador/index.php");
        break;

    case 'read':
    default:
        $data = $app-> read();
        include_once("./views/investigador/index.php");
        break;
}
include_once("./views/footer.php");
?>