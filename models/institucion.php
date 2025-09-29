<?php
require_once("sistema.php");
class Institucion extends Sistema {
    function create($data){
        $this-> connect();
        try {
            $this -> _DB -> beginTransaction();
            $sql = "INSERT INTO institucion (institucion, logotipo)
                    VALUES (:institucion, :logotipo)";
            $sth = $this -> _DB -> prepare($sql);
            $sth -> bindParam(":institucion", $data['institucion'], PDO::PARAM_STR);    
            $sth -> bindParam(":logotipo", $data['logotipo'], PDO::PARAM_STR); 
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
        $sth = $this -> _DB -> prepare("SELECT * FROM institucion");
        $sth -> execute();
        $data = $sth -> fetchAll();        
        return $data;
    }

    function readOne($id) {
        $this -> connect();
        $sth = $this -> _DB -> prepare("SELECT * FROM institucion WHERE id_institucion = :id_institucion");
        $sth -> bindParam(":id_institucion", $id, PDO::PARAM_INT);
        $sth -> execute();
        $data = $sth -> fetch(PDO::FETCH_ASSOC);        
        return $data;
    }

    function update($data,$id) {
        if (!is_numeric($id)) {
            return null;
        }
        if ($this -> validate($data)) {
            // falta modificar
        }
        $this -> connect();
        $this -> _DB -> beginTransaction();
        try {
            $sql = "UPDATE institucion SET institucion = :institucion, logotipo = :logotipo WHERE id_institucion = :id_institucion";
            $sth = $this -> _DB -> prepare($sql);
            $sth -> bindParam(":institucion", $data['institucion'], PDO::PARAM_STR);
            $sth -> bindParam(":logotipo", $data['logotipo'], PDO::PARAM_STR);
            $sth -> bindParam(":id_institucion", $id, PDO::PARAM_INT);
            $sth -> execute();
            $affectedRows = $sth -> rowCount();
            $this -> _DB -> commit();
            return $affectedRows;
        } catch (Exception $ex) {
            $this -> _DB -> rollback();
        }
        return null;
    }

    function delete($id) {
        if (is_numeric($id)) {
            $this -> connect();
            $this -> _DB -> beginTransaction();
            try {
                $sql = "DELETE FROM institucion WHERE id_institucion = :id_institucion";
                $sth = $this -> _DB -> prepare($sql);
                $sth -> bindParam(":id_institucion", $id, PDO::PARAM_INT);
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