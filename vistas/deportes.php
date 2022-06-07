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
    .card-g{
        margin-bottom: 290px; 
    }
    .btncard{
        background-color:black;
        color:white;
        border-color:white;
    }
    .btncard:hover{
        background-color: rgba(0, 0, 0, 0.898);
        color:white;
        border-color:black;
    }
    .card-back:hover{
        background-color: rgba(0, 0, 0, 0.898);
        color:white;
        border-color:black;
    }
    .border-card{
        border-color:black;
        background-color: rgba(0, 0, 0, 0.898);
    }
</style>
<body>
     <div class="container-fluid"><?php include_once 'menunoticias.php'?></div><br>
     <div class="container">
                    <h2>Noticias De Deportes</h2> 
        <div class="row">
                        <?php  
                    $query  = "SELECT * FROM noticias WHERE ID_CATEGORIA =1 limit 12";
                    $result= mysqli_query($conexion,$query);
                    while($row = mysqli_fetch_assoc($result)){ 
                ?>

                <!-- tarjetas para mostrar las noticias -->
                <div class="col  mt-5 card-g ">
                    <div class="card border-card" style="width:18rem; height:10rem; margin-button:2rem;">
                        <img   class="img-circle" src="data:image/jpg;base64,<?php echo base64_encode($row['IMAGEN'])?>">
                        <div class="card-body card-back">
                            <h5 class="card-title"><?php echo $row['TITULO_NOTI']; ?></h5>
                            <p class="card-text">Autor: <?php echo $row['AUTOR']; ?></p>
                            <p class="card-text">Fecha: <?php echo $row['FECHA_PUBLICACION']; ?></p>
                            <a href="noticia.php?id=<?php echo $row['ID_NOTICIA'];?>"><button class="btn-primary btncard">Ver Noticia<i class="fa-solid fa-eye"></i></button></a>
                        </div>
                    </div>
                </div>
            
                <?php }?>
                    </div>
            </div>
        </div>
</body>
</html>