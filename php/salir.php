<?php 
 include_once '../php/controlUsuarios.php';
  unset($_SESSION["cliente"]);
  session_destroy();
  header("Location: ../vistas/login.php");
?>