<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Gracias por contestar</h2>
   <img src="gracias.png" width="200" >
  <br><br>

  <?php
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $edad=$_POST['edad'];
    $calificacion=$_POST['calificacion'];

    echo"Nombre:".$nombre."<br>";
    echo"Apellidos:".$apellidos."<br>";
    echo"Edad:".$edad."<br>";
    echo"Calificación:".$calificacion."<br>";
  ?>

  <br>
  <a href="index.html">Regresar</a>
</body>
</html>