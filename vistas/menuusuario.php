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
    font-wheigth: bold;
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
  <nav class="container-fluid navbar navbar-light bg-light bg">
    <div class="container-fluid">
      <a class="navbar-brand titulo" href="#" style="color:white;"><span class="letracapital">V</span>oz Diaria</a>
    </div>
  </nav>
</body>
</html>
