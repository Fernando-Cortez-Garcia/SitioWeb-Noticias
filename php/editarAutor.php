<?php
    require_once 'conexion.php';
    require_once 'controlUsuarios.php';

    $var_id = $_POST['f_id'];
    $nombre = $_POST['f_nombre'];
    $apellidos = $_POST['f_apellidos'];
    $privilegio = $_POST['f_privilegio'];
    $correo = $_POST['f_correo'];
    $contraseña = $_POST['f_contraseña'];

    $query = "UPDATE usuario
                SET privilegio = '$privilegio',
                NOMBRE = '$nombre',
                APELLIDOS  = '$apellidos',
                CORREO = '$correo',
                PWD = '$contraseña'
                WHERE ID_USUARIO = '$var_id' ";

    $result = mysqli_query($conexion, $query);
        if($result){
            echo '<script>
            window.location.href="../vistas/vistadmin.php";
            </script>';
        }else{
            echo '<script>
            alert("Error al editar usuario");
        
            </script>';
        }
?>