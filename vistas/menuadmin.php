<?php include_once '../php/controlUsuarios.php';
 include '../librerias/boostrap.php';
?>


<style>
    
    .btn-salir{
         margin-top:8em; 
    }
    .navv{
        height: 100vh;
    }
    h6{
      margin-left:25px;
      margin-top:30px; 
      height:50px;
      padding:10px;
    }
</style>
<!-- menu lateral -->
<div>
    <ul class="nav flex-column navv">
    <li class="nav-item my-3">
            <h6><?php echo 'Hola', ' ', $nombre  ?> 🖐</h6>
            <a class="dropdown-item mt-5" href="vistadmin.php"><i class="fa-solid fa-users"></i> Autores</a>
    </li>
        <li class="nav-item my-3">
        <a class="dropdown-item" href="noticiasAdmin.php"><i class="fa-solid fa-newspaper"></i> Noticias</a>
        </li>
        <li class="nav-item my-3">
        <a class="dropdown-item" href="categorias.php"><i class="fa-solid fa-clipboard"></i> Categorias</a>
        </li>
        <li class="nav-item my-3">
        <a class="dropdown-item" id="open"><i class="fa-solid fa-eye"></i> Ver pagina </a>
        </li>
        <a class="btn btn-danger btn-salir" href="../php/salir.php"><i class="fa-solid fa-door-open"></i>  Salir</a>
    </ul>
</div>

<?php  include '../js/funciones.php'; ?>
