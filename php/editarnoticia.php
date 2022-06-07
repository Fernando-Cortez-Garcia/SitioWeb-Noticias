<?php
    require_once 'conexion.php';
    require_once 'controlUsuarios.php';
    $var_id = $_POST['f_id'];
    $cabezera = $_POST['f_cabezera'];
    $titulo = $_POST['f_titulo'];
    $categoria = $_POST['f_categoria'];
    $contenido = $_POST['f_contenido'];
    $imagen =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $date = $_POST['f_fecha'];
    $query = "UPDATE noticias
                SET DSC_NOTICIA = '$contenido',
                CABEZERA_NOT   = '$cabezera',
                TITULO_NOTI  = '$titulo',
                IMAGEN = '$imagen',
                AUTOR = '$nombre',
                FECHA_PUBLICACION='$date',
                ID_CATEGORIA='$categoria',
                ID_USUARIO ='$idusuario'
                WHERE ID_NOTICIA = '$var_id' ";
    $result = mysqli_query($conexion, $query);
        if($result){
            echo '<script>
            alert("Noticia publicada con exito");
            window.location.href="../vistas/panelUsuario.php";
            </script>';
        }else{
            echo '<script>
            alert("Error al publicar la noticia");
        
            </script>';
        }
?>