<?php include_once '../librerias/boostrap.php'; ?>
<?php include_once '../php/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/carrucel.css">
</head>
<style>
  .containerr{
    background-color: rgba(0, 0, 0, 0.742);
    
    width: 75%;
  }
</style>
  <body>
    <!-- Consulta para ordenar las noticias por fechas -->
  <?php  
      $noti1 = mysqli_query($conexion, "SELECT * FROM noticias ORDER BY FECHA_PUBLICACION DESC LIMIT 3");
      $rows = array();
      while ($row = $noti1->fetch_assoc()) {
          $rows[] = $row;
      }   
  ?>
      <div id="carouselExampleCaptions" class="carousel slide carrucel" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img   class="d-block w-100" src="data:image/jpg;base64,<?php echo base64_encode($rows[0]['IMAGEN'])?>">
            <!-- <img src="../img/checo.jpeg" class="d-block w-100" alt="..."> -->
            <div class="carousel-caption d-none d-md-block containerr">
              <h3><?php echo $rows[0]['TITULO_NOTI']; ?></h3>
              <h5>Por: <?php echo $rows[0]['AUTOR']; ?></h5>
              <p><?php
              if($rows[1]['ID_CATEGORIA'] ==1){
                  echo "Categoria: Deportes";}
                  else if($rows[1]['ID_CATEGORIA'] ==2){
                    echo "Categoria: Politica";}
                    else if($rows[1]['ID_CATEGORIA'] ==3){
                      echo "Categoria: Técnologia";
                    }
                    else if ($rows[1]['ID_CATEGORIA'] ==4){
                      echo "Categoria: Videojuegos";
                    }
                    else if ($row[1]['ID_CATEGORIA'==5]){
                      echo "Categoria: Educación";
                    }
                  ?></p>
                <p><?php echo $rows[0]['FECHA_PUBLICACION']; ?></p>
            </div>
          </div>
          <div class="carousel-item">
          <img   class="d-block w-100" src="data:image/jpg;base64,<?php echo base64_encode($rows[1]['IMAGEN'])?>">
            <div class="carousel-caption d-none d-md-block containerr">
              <h3><?php echo $rows[1]['TITULO_NOTI']; ?></h3>
              <h5>Por: <?php echo $rows[1]['AUTOR']; ?></h5>
              <p><?php
              if($rows[1]['ID_CATEGORIA'] ==1){
                  echo "Categoria: Deportes";}
                  else if($rows[1]['ID_CATEGORIA'] ==2){
                    echo "Categoria: Politica";}
                    else if($rows[1]['ID_CATEGORIA'] ==3){
                      echo "Categoria: Técnologia";
                    }
                    else if ($rows[2]['ID_CATEGORIA'] ==4){
                      echo "Categoria: Videojuegos";
                    }
                    else if ($row[2]['ID_CATEGORIA'==5]){
                      echo "Categoria: Educación";
                    }
                  ?></p>
                  <p><?php echo $rows[1]['FECHA_PUBLICACION']; ?></p>
            </div>
          </div>
          <div class="carousel-item">
          <img   class="d-block w-100" src="data:image/jpg;base64,<?php echo base64_encode($rows[2]['IMAGEN'])?>">
            <div class="carousel-caption d-none d-md-block containerr">
              <h3><?php echo $rows[2]['TITULO_NOTI']; ?></h3>
              <h5>Por: <?php echo $rows[2]['AUTOR']; ?></h5>
              <p><?php
              if($rows[2]['ID_CATEGORIA'] ==1){
                  echo "Categoria: Deportes";}
                  else if($rows[2]['ID_CATEGORIA'] ==2){
                    echo "Categoria: Politica";}
                    else if($rows[2]['ID_CATEGORIA'] ==3){
                      echo "Categoria: Técnologia";
                    }
                    else if ($rows[3]['ID_CATEGORIA'] ==4){
                      echo "Categoria: Videojuegos";
                    }
                    else if ($row[3]['ID_CATEGORIA'==5]){
                      echo "Categoria: Educación";
                    }
                  ?></p>
                  <p><?php echo $rows[2]['FECHA_PUBLICACION']; ?></p>                       
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </body>
</html>
