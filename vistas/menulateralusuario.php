<?php include_once '../php/controlUsuarios.php';
 include '../librerias/boostrap.php';
 ?>

<style>
    .btn-salir{
         margin-top:10em; 
         position:sticky;
    }
    .navv{
        height: 150vh;
    }
    h6{
      margin-left:25px;
      margin-top:30px; 
      height:50px;
      padding:10px;
    }
</style>
<!-- menu lateral -->
 <ul class="nav flex-column navv">
  <li class="nav-item my-3">
        <h6><?php echo 'Hola', ' ', $nombre  ?> 🖐</h6>
        <a class="dropdown-item mt-5" href="panelUsuario.php"><i class="fa-solid fa-newspaper"></i> Mis Noticias</a>
  </li>
    <li class="nav-item my-3">
      <a class="dropdown-item" href="crearnoticia.php"><i class="fa-solid fa-plus"></i> Crear Noticia</a>
    </li>
    <li class="nav-item my-3">
      <button class="dropdown-item" id="open">Ver pagina </button>
    </li>
    <a class="btn btn-danger btn-salir" href="../php/salir.php"><i class="fa-solid fa-door-open"></i>  Salir</a>
</ul>
<?php  include '../js/funciones.php'; ?>

