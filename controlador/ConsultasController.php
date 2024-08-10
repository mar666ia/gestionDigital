<?php
    class consultas extends dbconexion{
        public function select_ticket()
        {
            $sqlt = dbconexion::conexion()->prepare("SELECT * FROM tickets");
            $sqlt->execute();
            return $array = $sqlt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert_ticket($nombre, $matricula, $carrera, $descripcion, $area, $documentos)
        {
            $sql = dbconexion::conexion()->prepare("INSERT INTO tickets (tnombre, tmatricula, tcarrera, tarea, tdescripcion, tarchivos) VALUES ('$nombre', '$matricula', '$carrera', '$area', '$descripcion', '$documentos')");
            if ($sql->execute()) {
                $resultado = self::select_ticket();
                return $resultado;
            }
        }
    }
?>