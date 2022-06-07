<?php include '../librerias/boostrap.php';
 include '../php/conexion.php';
?>
<?php 


$id = $_GET['id'];
$query = "SELECT * FROM noticias WHERE ID_NOTICIA = '$id'";
$result = mysqli_query($conexion,$query);
$rows = array();
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}   
$categoria = $rows[0]['ID_CATEGORIA'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png"/>
    <link rel="stylesheet" href="../estilos/menuinicio.css">
    <title>Noticia / Voz Diaria</title>
</head>
<style>
    .noticia{
        border-right:10px black;
    }
  
    .noticia h3{
        margin-top:1em;
        margin-bottom:2em;
    }
    .noticia p{
        margin-top: 2em;
        text-align:left;
    }
    .autor{
        
        font-weight: bold;
    }
    .card-g{
        margin-top:1em;
        margin-bottom:330px;
    }
    .recomendacion h3{
        margin-top:1em;
    }
    .noticia img{
        margin:auto;
        width:40%;
    }
    .img-cardd{
        margin:auto;
        width: 100%;

    }
    .noticia h4{
        margin-top:1em;
    }
    .contenido{
        width: 70%;
        margin: auto;
        text-indent: 15p
    }
    .fecha{
        
        font-weight: bold;
    }
    .t{
        margin-bottom:2em;
    }
    @media screen and (max-width: 517px) {
        .noticia img{
            width:100%;
        }
        .recomendacion{
            display: none
            flex-wrap: wrap;
        }
    }
        

</style>
<body>
    <div class="container-fluid t">
    <?php include_once 'menunoticias.php'?>
        <div class="row">
            <div class="col-lg-8  noticia">
            
            <div class="contenido"><center><h3><?php echo $rows[0]['CABEZERA_NOT'] ?></h3></center></div>
                <img   class="d-block " src="data:image/jpg;base64,<?php echo base64_encode($rows[0]['IMAGEN'])?>">
                
                <div class="contenido">
                <center><h4> <?php echo $rows[0]['TITULO_NOTI'] ?></h4></center>
                    <p> <?php echo $rows[0]['DSC_NOTICIA'] ?></p><BR>
                    <p class="autor">Redactado por: <?php echo $rows[0]['AUTOR'] ?></p>
                    <span class="fecha">Fecha de publicación: <?php echo $rows[0]['FECHA_PUBLICACION'] ?></span>
                </div>

            </div>
            <div class="col-lg-3 recomendacion">
            <center> <h3> Noticias Relacionales</h3></center>
                <?php 
                    $query = "SELECT * FROM noticias WHERE ID_CATEGORIA = '$categoria'  ORDER BY RAND() LIMIT 2";
                    $result = mysqli_query($conexion,$query);
                    while($row = mysqli_fetch_array($result)){
                ?>
                <div class="col  mt-5 card-g ">
                    <div class="card border-card" style="width:18rem; height:10rem; margin-button:2rem;">
                        <img   class="img-circle img-cardd" src="data:image/jpg;base64,<?php echo base64_encode($row['IMAGEN'])?>">
                        <div class="card-body card-back">
                            <h5 class="card-title"><?php echo $row['TITULO_NOTI']; ?></h5>
                            <p class="card-text">Autor: <?php echo $row['AUTOR']; ?></p>
                            <p class="card-text">Fecha: <?php echo $row['FECHA_PUBLICACION']; ?></p>
                            <a href="noticia.php?id=<?php echo $row['ID_NOTICIA'];?>"><button class="btn-dark btncard">Ver Noticia <i class="fa-solid fa-eye"></i></button></a>
                        </div>
                    </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>