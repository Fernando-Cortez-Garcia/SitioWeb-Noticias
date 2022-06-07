<?php include_once '../librerias/boostrap.php';
?>
<!-- Pagina para publicar una noticia -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel / Voz Diaria</title>
    <link rel="shortcut icon" href="../img/logo.png"/>
    <link rel="stylesheet" href="../estilos/panelUsuario.css">
    <!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<style>
    .alto-text{
        height: 450px;
        margin-left: 100px;
    }
    .areatext{
        width: 800px;
        height: 300px;
        margin-bottom: 10px;
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <?php include_once 'menuusuario.php'?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 menulateral">
                <?php include '../vistas/menulateralusuario.php'; ?>
            </div>
            <div class="col-10 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 alto-text">
                            <div id="respuesta"></div>
                            <form id="formulario" method="POST" action="../php/savenoticia.php" enctype="multipart/form-data">
                                <div class="mb-4">
                                    <label type="text" class="form-label">Cabezera de la noticia</label>
                                    <input type="text" name="f_cabezera" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="text" class="form-label">Titulo de la noticia</label>
                                    <input type="text" name="f_titulo" class="form-control">
                                </div>
                                <div class="mb-4">
                                <label for="text" class="form-label" >Catégoria</label>
                                    <select class="form-select" aria-label="Default select example" name="f_categoria" >
                                        <option value="1">Deportes</option>
                                        <option value="2">Política</option>
                                        <option value="3">Técnología</option>
                                        <option value="4">Videojuegos</option>
                                        <option value="5">Educación</option>
                                    </select>
                                </div>
                                <label for="text" class="form-label">Cuerpo de la noticia</label>
                                <!-- <div id="editor" name="f_contenido">
                                </div> --><br>
                                <textarea class="areatext" name="f_contenido"></textarea>
                                <input type="file" class="btn"
                                 name="imagen"/><br>
                                <br>
                                <button type="submit" class="btn btn-primary">Publicar  <i class="fa-solid fa-upload"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<!-- Initialize Quill editor -->
<script src="../js/editor.js"></script>
</body>
</html>