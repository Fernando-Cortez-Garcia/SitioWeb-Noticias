<?php  
    include_once '../php/conexion.php';
    include_once '../librerias/boostrap.php';
    $query  = "SELECT * FROM noticias limit 12";
    $result= mysqli_query($conexion,$query);
    while($row = mysqli_fetch_assoc($result)){ 
?>
<style>
    .card-g{
        margin-bottom: 240px; 
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
<!-- tarjetas para mostrar las noticias -->
<div class="col  mt-5 card-g ">
    <div class="card border-card" style="width:18rem; height:10rem; margin-button:2rem;">
        <img   class="img-circle" src="data:image/jpg;base64,<?php echo base64_encode($row['IMAGEN'])?>">
        <div class="card-body card-back">
            <h5 class="card-title"><?php echo $row['TITULO_NOTI']; ?></h5>
            <p class="card-text">Autor: <?php echo $row['AUTOR']; ?></p>
            <p class="card-text">Fecha: <?php echo $row['FECHA_PUBLICACION']; ?></p>
            <?php $id = $row['ID_NOTICIA']; ?>
            <a href="noticia.php?id=<?php echo $row['ID_NOTICIA'];?>"><button class="btn-primary btncard">Ver Noticia <i class="fa-solid fa-eye"></i></button></a>
        </div>
    </div>
</div>
<?php }?>