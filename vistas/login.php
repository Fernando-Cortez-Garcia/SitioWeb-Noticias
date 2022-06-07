<?php include_once '../librerias/boostrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png"/>
    <title>Voz Diaria</title>
    <link rel="stylesheet" href="../estilos/login.css">
</head>
<body>
    <div class="container contenedorp">
        <div class="row">
            <div class="col bg d-none d-lg-block">
                <img class="bg" src="../img/megafono.jpeg">
            </div>
            <div class="col">
                <h1 class="fw-bold text-center">Voz Diaria</h1>
                <h2 class=" text-center my-5">Iniciar sesión</h2>
                <!-- Formulario de inicio de sesion -->
                <form action="login.php" method="POST">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" name="f_correo" class="form-control">
                    </div>
                    <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="f_contraseña" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="iniciar" class="btn btn-primary">Iniciar sesion</button>
                    </div>
                    <!-- <div class="my-5 text-center">
                        <span>¿No tienes cuenta? <a href="registro.php">Registrate</a></span>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!-- validacion del formulario -->
<?php 
 include_once '../php/conexion.php';
    if(isset($_POST['iniciar'])){
        $correo = $_POST['f_correo'];
        $pass = $_POST['f_contraseña'];
        $consulta = mysqli_query ($conexion, "SELECT * FROM usuario WHERE CORREO = '$correo' AND PWD = '$pass' ");   
                //   si la consulta falla 
            if(!$consulta){ 
                 echo '<div class="alert alert-danger fixed-top text-center" role="alert"><i class="fa-solid fa-circle-exclamation"></i> Usuario o contraseña incorrectos  
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                     exit;
             }
                    // si la consulta es exitosa
             if($usuario = mysqli_fetch_assoc($consulta)) {
                if($usuario['privilegio']==1){
                        session_start();
                        $_SESSION['cliente'] = $correo;
                        header("Location:../vistas/vistadmin.php");
                }else{
                        session_start();
                        $_SESSION['cliente'] = $correo;
                        header("Location:../vistas/panelUsuario.php");
                 }              
             } else {           
                echo '<div class="alert alert-danger fixed-top text-center" role="alert"><i class="fa-solid fa-circle-exclamation"></i> Usuario o contraseña incorrectos  
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
             } 
    }
?>