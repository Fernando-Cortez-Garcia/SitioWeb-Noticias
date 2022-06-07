<?php 
    include 'controlUsuarios.php';
    include 'conexion.php';
    //insertar el contenido del editor en la base de datos
    $cabezera = $_POST['f_cabezera'];
    $titulo = $_POST['f_titulo'];
 
    // REALIZA LA CONSULTA
    $sql = "INSERT INTO categorias (ID_CATEGORIA,NOMBRECATEGORIA) VALUES ('','$contenido','$cabezera','$titulo','$imagen','$nombre','$date','$categoria','$idusuario')";
    $result = mysqli_query($conexion, $sql);
    if($result){
        echo '<script>
        alert("Noticia publicada con exito");
        window.location.href="../vistas/crearnoticia.php";
        </script>';
    }else{
        echo '<script>
        alert("Error al publicar la noticia");
        </script>';
    }
?>