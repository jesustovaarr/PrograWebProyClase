<?php
require_once("../models/usuario.php");
$app = new Usuario();
//$app -> checarRol('Administrador');
$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$data = array();
include_once("./views/header.php");
switch ($action) {
    case 'create':
        if (isset($_POST['enviar'])) {
            $data['correo'] = $_POST['correo'];
            $data['contrasena'] = $_POST['contrasena'];
            $filas = $app-> create($data);
            if ($filas) {
                $alerta['mensaje'] = "Usuario dado de alta correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else {
                $alerta['mensaje'] = "El usuario no fue dado de alta";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");
            }
            $data = $app-> read();
            include_once("./views/usuario/index.php");
        } else {
            include_once("./views/usuario/_form.php");
        }
        break;

    case 'update':
        if (isset($_POST['enviar'])) {
            $data['correo'] = $_POST['correo'];
            $data['contrasena'] = $_POST['contrasena'];
            $id = $_GET['id'];
            $filas = $app-> update($data, $id);
            if ($filas) {
                $alerta['mensaje'] = "Usuario modificado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else {
                $alerta['mensaje'] = "El usuario no fue modificado";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");
            }            
            $data = $app-> read();
            include_once("./views/usuario/index.php");
        } else {
            $id = $_GET['id'];
            $data = $app-> readOne($id);
            include_once("./views/usuario/_form_update.php");
        }
        break;

    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $filas = $app-> delete($id);
            if ($filas) {
                $alerta['mensaje'] = "Usuario eliminado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            } else {
                $alerta['mensaje'] = "El usuario no fue eliminado";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");
            }            
        }
        $data = $app-> read();
        include_once("./views/usuario/index.php");
        break;

    case 'read':
    default:
        $data = $app-> read();
        foreach ($data as &$usuario) {
            $usuario['roles'] = $app-> getRoles($usuario['correo']);
            $usuario['permisos'] = $app-> getPermisos($usuario['correo']);
        }
        unset($usuario);

        include_once("./views/usuario/index.php");
        break;
}
include_once("./views/footer.php");
//print_r($_SESSION);
?>