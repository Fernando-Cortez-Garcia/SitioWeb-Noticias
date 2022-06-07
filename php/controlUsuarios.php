<?php
    include_once 'conexion.php';
    // CONTROL DE USUARIO ASIGNA TIEMPO Y RECUPERA INFORMACION DE LA SSESION INICIADA
    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    if (isset($_SESSION['cliente'])){
        $cliente = $_SESSION['cliente'];
        if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 6000)) {
            session_unset(); 
            session_destroy(); 
            header('Location: login.php');
        }
        $_SESSION['start'] = time();
    }else{
    header('Location: login.php');//Aqui lo redireccionas al lugar que quieras.
    die() ;
    }
    $correo = $_SESSION['cliente'];
    $consulta = mysqli_query ($conexion, "SELECT * FROM usuario WHERE CORREO = '$correo' ");
    $rows = array();
    while ($row = $consulta->fetch_assoc()) {
        $rows[] = $row;
    }
    $idusuario = $rows[0]['ID_USUARIO'];
    $nombre = $rows[0]['NOMBRE'];
?>