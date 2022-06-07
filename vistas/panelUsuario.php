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
</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            	<?php include_once 'menuusuario.php'?>
            </div>   
       		<div class="row">
            	<div class="col-2 menulateral">
                	<?php include '../vistas/menulateralusuario.php'; ?>
           		</div>
				   <div class="col-10">
					   <div id="mensaje"></div>
                 <table class="table">
					<thead>
						<tr>
							<th scope="col">TITULO NOTICIA</th>
							<th scope="col">FECHA DE PUBLICACION</th>
                            <th scope="col">ACCIONES</th>
						</tr>
					</thead>
					<tbody>						
						<?php	
						//   consulta de noticias segun el usuario que inicio session    
							$query  = "SELECT * FROM noticias WHERE ID_USUARIO = $idusuario ORDER BY FECHA_PUBLICACION DESC";
							$rows = array();
							$result= mysqli_query($conexion,$query);
							while($row = $result->fetch_assoc()){ 
								$rows[] = $row;
							}
							// validacion si el usuario no tiene ninguna noticia publicada
						if($rows == null){
							echo "<h4>No has publicado ninguna noticia todavia 😪</h4>";
						}
						?>
					<!-- recorrido del array que tiene las noticias y las imprime en una tabla -->
						<?php foreach($rows as $row):?>
							<tr>		      
								<td><?php echo $row['TITULO_NOTI'];?></td>
								<td><?php echo $row['FECHA_PUBLICACION'];?></td>
								<td>
									<button class=" btn btn-info w-25" data-bs-toggle="modal" data-bs-target="#modalver<?php echo $row['ID_NOTICIA']?>"><a><i class="fa-solid fa-eye"></i></a></button> |
									<button class="btn btn-dark w-25" type="button" data-bs-toggle="modal" data-bs-target="#modalupdate<?php echo $row['ID_NOTICIA']?>"><a></a><i class="fa-solid fa-pen-to-square"></i></button>|
									<button class="btn btn-danger w-25" type="button" data-bs-toggle="modal" data-bs-target="#modaleliminar<?php echo $row['ID_NOTICIA']?>"><a></a><i class="fa-solid fa-trash"></i></button> |				
								</td>
							</tr>
								<!-- inportartacion de los modales de accion de los botones -->
								<?php include '../vistas/modalvernoti.php';
									include '../vistas/modalupdate.php';
									include '../vistas/modaleliminarnoti.php';						
								?>	
						<?php endforeach;?>		
					</tbody>
				</table>
                </div>
			</div>
        </div>
    </div>
</body>
</html>