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
					   <div id="mensaje"><?php if(isset($mensaje)){echo $mensaje;}?></div>
                      <center><h2 class=" mt-3 mb-3">Listado de Autores</h2></center>
					   <div id="mensaje"></div>
                       <button class="btn btn-DARK btnagregar w-15" type="button" data-bs-toggle="modal" data-bs-target="#modalAgregar">Agregar Autor <i class="fa-solid fa-circle-plus"></i></button>
                       <?php include 'modalagregarautor.php';?>
                 <table class="table">
					<thead>
						<tr>
							<th scope="col">NOMBRE</th>
							<th scope="col">APELLIDOS</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">ACCIONES</th>
						</tr>
					</thead>
					<tbody>						
						<?php	
						//   consulta de noticias segun el usuario que inicio session    
							$query  = "SELECT * FROM usuario";
							$rows = array();
							$result= mysqli_query($conexion,$query);
							while($row = $result->fetch_assoc()){ 
								$rows[] = $row;
							}
						?>
					<!-- recorrido del array que tiene las noticias y las imprime en una tabla -->
						<?php foreach($rows as $row):?>
							<tr>		      
								<td><?php echo $row['NOMBRE'];?></td>
								<td><?php echo $row['APELLIDOS'];?></td>
                                <td><?php echo $row['CORREO'];?></td>
								<td>
									<button class=" btn btn-info w-25" data-bs-toggle="modal" data-bs-target="#modalverAutor<?php echo $row['ID_USUARIO']?>"><a><i class="fa-solid fa-eye"></i></a></button> |
									<button class="btn btn-dark w-25" type="button" data-bs-toggle="modal" data-bs-target="#modalupdateAutor<?php echo $row['ID_USUARIO']?>"><a></a><i class="fa-solid fa-pen-to-square"></i></button>|
									<button class="btn btn-danger w-25" type="button" data-bs-toggle="modal" data-bs-target="#modaleliminarAutor<?php echo $row['ID_USUARIO']?>"><a></a><i class="fa-solid fa-trash"></i></button> |				
								</td>
							</tr>
								<!-- inportartacion de los modales de accion de los botones -->
								<?php include '../vistas/modalverautor.php';
									include '../vistas/updateautor.php';
									include '../vistas/modaleliminarautor.php';						
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