<?php
require_once("sistema.php");
class Tratamiento extends Sistema {
    function create($data){
        $this-> connect();
        try {
            $this -> _DB -> beginTransaction();
            $sql = "INSERT INTO tratamiento (tratamiento)
                    VALUES (:tratamiento)";
            $sth = $this -> _DB -> prepare($sql);
            $sth -> bindParam(":tratamiento", $data['tratamiento'], PDO::PARAM_STR);    
            $sth -> execute();   
            $affectedRows = $sth -> rowCount(); 
            $this -> _DB -> commit();
            return $affectedRows;
        } catch (Exception $ex) {
            $this -> _DB -> rollback();
        }
        return null;
    }

    function read() {
        $this -> connect();
        $sth = $this -> _DB -> prepare("SELECT * FROM tratamiento");
        $sth -> execute();
        $data = $sth -> fetchAll();        
        return $data;
    }

    function readOne($id) {
        $this -> connect();
        $sth = $this -> _DB -> prepare("SELECT * FROM tratamiento WHERE id_tratamiento = :id_tratamiento");
        $sth -> bindParam(":id_tratamiento", $id, PDO::PARAM_INT);
        $sth -> execute();
        $data = $sth -> fetch(PDO::FETCH_ASSOC);        
        return $data;
    }

    function update($data,$id) {
        if (!is_numeric($id)) {
            return null;
        }
        if ($this -> validate($data)) {
            $this -> connect();
            $this -> _DB -> beginTransaction();
            try {
                $sql = "UPDATE tratamiento SET tratamiento = :tratamiento WHERE id_tratamiento = :id_tratamiento";
                $sth = $this -> _DB -> prepare($sql);
                $sth -> bindParam(":tratamiento", $data['tratamiento'], PDO::PARAM_STR);
                $sth -> bindParam(":id_tratamiento", $id, PDO::PARAM_INT);
                $sth -> execute();
                $affectedRows = $sth -> rowCount();
                $this -> _DB -> commit();
                return $affectedRows;
            } catch (Exception $ex) {
                $this -> _DB -> rollback();
            }
        }
        return null;
    }

    function delete($id) {
        if (is_numeric($id)) {
            $this -> connect();
            $this -> _DB -> beginTransaction();
            try {
                $sql = "DELETE FROM tratamiento WHERE id_tratamiento = :id_tratamiento";
                $sth = $this -> _DB -> prepare($sql);
                $sth -> bindParam(":id_tratamiento", $id, PDO::PARAM_INT);
                $sth -> execute();
                $affectedRows = $sth -> rowCount();
                $this -> _DB -> commit();
                return $affectedRows;
            } catch (Exception $ex) {
                $this -> _DB -> rollback();
            }
            return null;
        } else {
            return null;
        }
    }

    function validate($data) {
        return true;
    }
} 
?>