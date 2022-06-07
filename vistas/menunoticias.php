<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  .letracapital{
    font-size: 2em;
  }
  .titulo{
    margin-left:2em;
  }
  .bg{
    background: linear-gradient( to right, #1c1c1c, #050505, #000000, #272727, #2d2d2d);
    background-size: 400% 400%;
    animation: animate-background-gradient 10s infinite ease-in-out;
  }
  @keyframes animate-background-gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
  }
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Voz Diaria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="inicionoticias.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paginamodelo.php?id=1">Deportes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paginamodelo.php?id=2">Politica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paginamodelo.php?id=4">Video Juegos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="paginamodelo.php?id=3">Técnologia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Iniciar sesion <i class="fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
</body>
</html>
