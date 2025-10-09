<?php
require_once("sistema.php");
class Investigador extends Sistema {
    function create($data){
        $this-> connect();
        try {
            $this -> _DB -> beginTransaction();
            $sql = "INSERT INTO investigador (primer_apellido,segundo_apellido, nombre, fotografia, semblanza, id_institucion, id_tratamiento)
                    VALUES (:primer_apellido, :segundo_apellido, :nombre, :fotografia, :semblanza, :id_institucion, :id_tratamiento)";
            $sth = $this -> _DB -> prepare($sql);
            $sth -> bindParam(":primer_apellido", $data['primer_apellido'], PDO::PARAM_STR);    
            $sth -> bindParam(":segundo_apellido", $data['segundo_apellido'], PDO::PARAM_STR);
            $sth -> bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
            $sth -> bindParam(":semblanza", $data['semblanza'], PDO::PARAM_STR);
            $sth -> bindParam(":id_institucion", $data['id_institucion'], PDO::PARAM_INT);
            $sth -> bindParam(":id_tratamiento", $data['id_tratamiento'], PDO::PARAM_INT);
            $fotografia = $this -> cargarFotografia('investigador','fotografia');
            $sth -> bindParam(":fotografia", $fotografia, PDO::PARAM_STR);
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
        $sth = $this -> _DB -> prepare("SELECT i.*,ins.institucion,t.tratamiento
                                        FROM investigador i left join institucion ins on i.id_institucion = ins.id_institucion
                                        left join tratamiento t on i.id_tratamiento = t.id_tratamiento");
        $sth -> execute();
        $data = $sth -> fetchAll();        
        return $data;
    }

    function readOne($id) {
        $this -> connect();
        $sth = $this -> _DB -> prepare("SELECT i.*,ins.institucion,t.tratamiento
                                        FROM investigador i left join institucion ins on i.id_institucion = ins.id_institucion
                                        left join tratamiento t on i.id_tratamiento = t.id_tratamiento
                                        WHERE id_investigador = :id_investigador");
        $sth -> bindParam(":id_investigador", $id, PDO::PARAM_INT);
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
                $sql = "UPDATE investigador SET primer_apellido = :primer_apellido, segundo_apellido = :segundo_apellido, nombre = :nombre, semblanza = :semblanza, id_institucion = :id_institucion, id_tratamiento = :id_tratamiento WHERE id_investigador = :id_investigador";
                if(isset($_FILES['fotografia'])) {
                    if($_FILES['fotografia']['error'] == 0) {
                        $sql = "UPDATE investigador SET primer_apellido = :primer_apellido, segundo_apellido = :segundo_apellido, nombre = :nombre, fotografia = :fotografia, semblanza = :semblanza, id_institucion = :id_institucion, id_tratamiento = :id_tratamiento WHERE id_investigador = :id_investigador";
                        $fotografia = $this -> cargarFotografia('investigador','fotografia');
                    }
                }
                $sth = $this -> _DB -> prepare($sql);
                $sth -> bindParam(":primer_apellido", $data['primer_apellido'], PDO::PARAM_STR);
                $sth -> bindParam(":segundo_apellido", $data['segundo_apellido'], PDO::PARAM_STR);
                $sth -> bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
                $sth -> bindParam(":semblanza", $data['semblanza'], PDO::PARAM_STR);
                $sth -> bindParam(":id_institucion", $data['id_institucion'], PDO::PARAM_INT);
                $sth -> bindParam(":id_tratamiento", $data['id_tratamiento'], PDO::PARAM_INT);
                $sth -> bindParam(":id_investigador", $id, PDO::PARAM_INT);
                if(isset($_FILES['fotografia'])) {
                    if($_FILES['fotografia']['error'] == 0) {
                        $sth -> bindParam(":fotografia", $fotografia, PDO::PARAM_STR);
                    }
                }
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
                $sql = "DELETE FROM investigador WHERE id_investigador = :id_investigador";
                $sth = $this -> _DB -> prepare($sql);
                $sth -> bindParam(":id_investigador", $id, PDO::PARAM_INT);
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