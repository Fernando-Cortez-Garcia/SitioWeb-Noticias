<?php include '../librerias/boostrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voz Diaria</title>
    <link rel="stylesheet" href="../estilos/registro.css">
</head>
<body>
<div class="container contenedorp">
        <div class="row">
            <div class="col bg d-none d-lg-block">
                <img class="bg" src="../img/chicapaisaje.jpeg">
            </div>
            <div class="col">
            <h1 class="fw-bold text-center mt-3">Voz Diaria</h1>
                <h2 class=" text-center my-5">Registro</h2>
                <form action="../php/registrarusuario.php" method="POST">
                <div class="mb-4">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="f_nombre" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Apellidos</label>
                        <input type="text" name="f_apellidos" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" name="f_correo" class="form-control">
                    </div>
                    <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="f_contra" class="form-control">
                    </div>
                    <div class="mb-4">
                    <label for="password" class="form-label">Confirma Contraseña</label>
                        <input type="password" name="f_contra2" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary mb-5" name="btn_registrar">Registrarse</button>
                    </div>                  
                </form>
            </div>
        </div>
    </div>
</body>
</html>