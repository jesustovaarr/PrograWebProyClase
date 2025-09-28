<?php
require_once("sistema.php");
class Investigador extends Sistema {
    function create($data){
        return $affectedRows;
    }

    function read() {
        $this -> connect();
        $sth = $this -> _DB -> prepare("select i.institucion, inv.*
                                       from institucion i join investigador inv
                                       on i.id_institucion = inv.id_institucion;");
        $sth -> execute();
        $data = $sth -> fetchAll();        
        return $data;
    }

    function readOne($id) {
        $this -> connect();
        $sth = $this -> _DB -> prepare("SELECT * FROM investigador WHERE id_investigador = :id_investigador");
        $sth -> bindParam(":id_investigador", $id, PDO::PARAM_INT);
        $sth -> execute();
        $data = $sth -> fetchAll();        
        return $data;
    }

    function update($data,$id) {
        return $affectedRows;
    }

    function delete($id) {
        return $affectedRows;
    }
}
?>