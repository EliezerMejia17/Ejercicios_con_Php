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
    
  <div id="ejercicio3" class="section-container">
      <h1>Ejercicio  3</h1>
      <?php
      $caras_dado = array(
          "imagenes/cara1.jpg",
          "imagenes/cara2.jpg",
          "imagenes/cara3.jpg"
      );
      $indice_cara = rand(0, count($caras_dado) - 1);
      $imagen_cara = $caras_dado[$indice_cara];
         ?>
      <h3>La cara del Dado es: </h3></br>
      <img src="<?php echo $imagen_cara; ?>" alt="Cara del dado">
    </div>

    <div id="ejercicio4" class="section-container">
      <h1>Ejercicio  4</h1>
       <?php
      $cartas_imagenes = array(
      1 => "imagenes/carta1.jpg",
      2 => "imagenes/carta2.jpg",
      3 => "imagenes/carta3.jpg",
      4 => "imagenes/carta4.jpg",
      5 => "imagenes/carta5.jpg",
      6 => "imagenes/carta6.jpg",
      7 => "imagenes/carta7.jpg",
      8 => "imagenes/carta8.jpg",
      9 => "imagenes/carta9.jpg",
      10 => "imagenes/carta10.jpg");

      $carta_1 = rand(1, 10);
      $carta_2 = rand(1, 10);
      $carta_3 = rand(1, 10);

      $maximo = max($carta_1, $carta_2, $carta_3);

      echo "<h3>Cartas seleccionadas: </h3>";
      echo "<img src='" . $cartas_imagenes[$carta_1] . "' alt='Carta $carta_1'>";
      echo "<img src='" . $cartas_imagenes[$carta_2] . "' alt='Carta $carta_2'>";
      echo "<img src='" . $cartas_imagenes[$carta_3] . "' alt='Carta $carta_3'>";

      echo "<h3>Carta con el Valor Más Alto:</h3>";
      echo "<img src='" . $cartas_imagenes[$maximo] . "' alt='Carta $maximo'>";
      ?>
  </div>


  <div id="ejercicio5" class="section-container">
      <h1>Ejercicio  5</h1>
      <?php
      $img_dado = array(
         1 => "imagenes/cara1.jpg",
         2 => "imagenes/cara2.jpg",
         3 => "imagenes/cara3.jpg",
         4 => "imagenes/cara4.jpg",
         5 => "imagenes/cara5.jpg",
         6 => "imagenes/cara6.jpg");

    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);
    $mayor = max($dado1, $dado2);

echo "<img src='" . $img_dado[$dado1] . "' alt ='Dado 1'>";
echo "<img src='" . $img_dado[$dado2] . "' alt ='Dado 2'>";

if ($dado1 == $dado2){
  echo "<p>Ha salido una pareja de valores iguales.</p>";
} else {
  echo "<p>El valor mayor es: $mayor</p>";
}
?>
    </div>




<div id="ejercicio6" class="section-container">
      <h1>Ejercicio  6</h1></br>
      <?php
      $circulos = rand(1, 10);

      if ($circulos == 1) {
          print "<h2>$circulos círculo</h2>";
      } else {
          print "<h2>$circulos círculos</h2>";
      }

      print '<table class="conborde">';
      print '<tbody>';

      for ($i = 0; $i < $circulos; $i++) {
          print '<tr>';
          print '<td style="border: 1px solid black;">';
          print '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="70" height="70">';
          print '<circle cx="35" cy="35" r="30" fill="black"/>';
          print '</svg>';
          print '</td>';
          print '</tr>';
      }
      print '</tbody>';
      print '</table>';
      ?>
  </div>



  <div id="ejercicio7" class="section-container">
      <h1>Ejercicio  7</h1>
    <?php
    $imagen_dado = array(
        1 => "imagenes/cara1.jpg",
        2 => "imagenes/cara2.jpg",
        3 => "imagenes/cara3.jpg",
        4 => "imagenes/cara4.jpg",
        5 => "imagenes/cara5.jpg",
        6 => "imagenes/cara6.jpg");
    
    $num_dados = rand(1, 10);
    $total_puntos = 0;

    if ($num_dados == 1) {
        echo "<h2>Se tiró 1 dado</h2>";
    } else {
        echo "<h2>Se tiraron $num_dados dados</h2>";
    }
  echo '<div>';
    for ($i = 0; $i < $num_dados; $i++) {
    $puntos_dado = rand(1, 6);
    $total_puntos += $puntos_dado;
    echo "<img src='" . $imagen_dado[$puntos_dado] . "' alt='Dado " . ($i + 1) . "'>";
    }
 echo '</div>';
 echo "<p>Total de puntos obtenidos: $total_puntos</p>";
    ?>
  </div>



  <div id="ejercicio8" class="section-container">
    <h1>Ejercicio  8</h1></br>
        <?php
   $numeros = [
       ["Español", "Uno", "Dos", "Tres", "Cuatro", "Cinco", "Seis"],
       ["Portugués", "Um", "Dois", "Três", "Quatro", "Cinco", "Seis"],
       ["Italiano", "Uno", "Due", "Tre", "Quattro", "Cinque", "Sei"]
   ];

   $imagen_dado = array(
       1 => "imagenes/cara1.jpg",
       2 => "imagenes/cara2.jpg",
       3 => "imagenes/cara3.jpg",
       4 => "imagenes/cara4.jpg",
       5 => "imagenes/cara5.jpg",
       6 => "imagenes/cara6.jpg"
   );

   $indice_idioma = rand(0, count($numeros) - 1);
   $idioma_seleccionado = $numeros[$indice_idioma][0];
   $numeros_idioma = array_slice($numeros[$indice_idioma], 1);

   $tirada_dado = rand(1, 6);
   $numero_tirado = $numeros_idioma[$tirada_dado - 1];
   $imagen_tirada = $imagen_dado[$tirada_dado];

   echo "<img src='$imagen_tirada' alt='Dado'>";
   echo "<h2>El dado ha salido con el  numero: $numero_tirado </br> En idioma: $idioma_seleccionado </h2>";

   
        ?>
    </div>




    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>