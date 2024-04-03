<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practica Php Eliezer</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1><center>Practica 7 - Php </center></h1>
    <ul class="nav nav-underline justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#ejercicio1">Ejercicio 1</a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="#ejercicio2">Ejercicio 2</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#ejercicio3">Ejercicio 3</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#ejercicio4">Ejercicio 4</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#ejercicio5">Ejercicio 5</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#ejercicio6">Ejercicio 6</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#ejercicio7">Ejercicio 7</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#ejercicio8">Ejercicio 8</a>
      </li>
    </ul>

    <div id="inicio" class="section-container">
        <h2>Inicio</h2>
        <p>En esta practica se veran diferentes ejercicios donde se trabajara con <b>php</b>, ademas de ver como se trabaja con html y css.</p></p>
    </div>

    <div id="ejercicio1" class="section-container">
      <h1>Ejercicio  1</h1></br>
       <?php
      $nombre = "Eliezer";
      $apellido = "Mejia";
        ?>
       <h3><?php echo "Nombre: " . $nombre . " " . $apellido; ?></h3>
  </div>

  <div id="ejercicio2" class="section-container">
      <h1>Ejercicio  2</h1>
       <?php
       $numero = rand(1, 6);
      ?>
      Numero aleatorio:  <div id="numero"><?php echo $numero; ?></div>
  </div>
    


    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>