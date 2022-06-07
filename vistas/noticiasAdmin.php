<!-- inportacion de librerias y bd necesarias -->
<?php include_once '../librerias/boostrap.php';
          include_once '../php/controlUsuarios.php';
		   include_once '../php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../img/logo.png"/>
    <title>Panel / Voz Diaria</title>
    <link rel="stylesheet" href="../estilos/panelUsuario.css">
</head>
<style>
	h4{
		margin-top:6em;
		text-align:center;
		font-size:2em;
		position:absolute;
		margin-left:7em;
	}
    .btnagregar{
        float:right;
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            	<?php include_once 'menuusuario.php'?>
            </div>   
       		<div class="row">
            	<div class="col-2 menulateral">
                <?php include_once 'menuadmin.php'?>
           		</div>
				   <div class="col-10">
                      <center><h2 class=" mt-3 mb-3">Todas las noticias</h2></center>
					   <div id="mensaje"></div>
                            <div class="container-fluid">
                            <h5>Filtrar por</h5>
                                <form class="d-flex" method="POST" action="noticiasAdmin.php">
                                <input class="form-control me-2 w-25" type="search" placeholder="Autor" aria-label="Search" name="f_autor">
                                <button class="btn btn-outline-dark" type="submit" name="btn_buscar">Filtrar</button>
                                <input class="form-control me-2 w-25" style="margin-left: 50px;" type="search" placeholder="Titulo" aria-label="Search" name="f_titulo">
                                <button class="btn btn-outline-dark ml-2" type="submit" name="btn_buscar">Filtrar</button>
                                </form>
                            </div>

                 <table class="table">
					<thead>
						<tr>
							<th scope="col">TITULO</th>
							<th scope="col">AUTOR</th>
                            <th scope="col">FECHA DE PUBLICACION</th>
                            
                            <th scope="col">ACCIONES</th>
						</tr>
					</thead>
					<tbody>						
						<?php	
						  if(isset($_POST['btn_buscar'])){
                                $autor = $_POST['f_autor'];
                                $titulo = $_POST['f_titulo'];
                                $query = "SELECT * FROM noticias WHERE AUTOR LIKE '%$autor%' AND TITULO_NOTI LIKE '%$titulo%'";
                            // $query = "SELECT * FROM noticias WHERE AUTOR LIKE '%$autor%' OR TITULO_NOTI LIKE '%$titulo%' "; 

                        }else{
							$query  = "SELECT * FROM noticias ORDER BY FECHA_PUBLICACION DESC";
                        }
							$result= mysqli_query($conexion,$query);
							while($row = mysqli_fetch_assoc($result)){ 
                        
						?>
					<!-- recorrido del array que tiene las noticias y las imprime en una tabla -->
						
							<tr>		      
								<td><?php echo $row['TITULO_NOTI'];?></td>
								<td><?php echo $row['AUTOR'];?></td>
                                <td><?php echo $row['FECHA_PUBLICACION'];?></td>
								<td>
									<button class=" btn btn-info w-50" data-bs-toggle="modal" data-bs-target="#modalver<?php echo $row['ID_NOTICIA']?>"><a><i class="fa-solid fa-eye"></i></a></button> 
									<!-- <button class="btn btn-dark w-25" type="button" data-bs-toggle="modal" data-bs-target="#modalupdateAutor<?php echo $row['ID_USUARIO']?>"><a></a><i class="fa-solid fa-pen-to-square"></i></button>|
									<button class="btn btn-danger w-25" type="button" data-bs-toggle="modal" data-bs-target="#modaleliminarAutor<?php echo $row['ID_USUARIO']?>"><a></a><i class="fa-solid fa-trash"></i></button> |				 -->
								</td>
							</tr>
								<!-- inportartacion de los modales de accion de los botones -->
								<?php include '../vistas/modalvernoti.php';				
								?>	
						<?php }?>		
					</tbody>
				</table> 
              
                </div>
			</div>
        </div>
    </div>
</body>
</html>