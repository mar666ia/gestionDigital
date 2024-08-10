<?php
    require_once "conexion.php";
    require_once "../controlador/ConsultasController.php";

    $tipo_consulta = $_POST['tipo_operacion'];
    switch ($tipo_consulta) {
        case 'guardar':
            $nombre = $_POST['nombre'];
            $matricula = $_POST['matricula'];
            $carrera = $_POST['carrera'];
            $descripcion = $_POST['descripcion'];
            $area = $_POST['area'];
            $documentos = $_POST['documentos'];

            $consultas = new consultas();
            $ejecutar = $consultas->insert_ticket($nombre, $matricula, $carrera, $descripcion, $area, $documentos);
            echo json_encode($ejecutar);
        break;
    }
?>