<?php include_once '../librerias/boostrap.php';
 include_once '../php/controlUsuarios.php';?>
<?php include_once '../php/conexion.php'?>
<!-- Pagina principal de las noticias -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png"/>
    <link rel="stylesheet" href="../estilos/menuinicio.css">
    <title>Inicio / Voz diaria</title>
</head>
<style>
    h2{
        text-align:center;
        margin-top:10px;
    }
</style>
<body>
     <div class="container-fluid"><?php include_once 'menunoticias.php'?></div><br>
        <h2>Noticias Del Día</h2> 
        <div class="container-fluid"><?php include_once 'carrucel.php'?></div>
        <div class="container mt-5">
            <div class="row">
                <?php include_once 'cards.php'; ?>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>