<?php

require_once("classPato.php");
require_once("classCondor.php");
require_once("classGallina.php");
require_once("classPinguino.php");

// objeto para pato
$pato = new Pato("https://images.emojiterra.com/google/noto-emoji/v2.034/512px/1f986.png","Pato Feo", "Pato coacoxtle");

$patoNada = $pato -> getNadar("Si puede nadar");
$patoVuela = $pato -> getVolar("No puede volar");

//objeto para condor
$condor = new Condor("https://img2.freepng.es/20180516/rqw/kisspng-bird-andean-condor-vulture-colca-canyon-5afcbd6d488484.808603121526513005297.jpg","Condor Blanco", "Condor andino");

$condorNada = $condor -> getNadar("No puede nadar");
$condorVuela = $condor -> getVolar("Si puede volar");

// objeto para gallina
$gallina = new Gallina("https://img.freepik.com/vector-gratis/gran-gallina-gorda_1308-33412.jpg","Gallina India", "Gallina Guinea");

$gallinaNada = $gallina -> getNadar("No puede nadar");
$gallinaVuela = $gallina -> getVolar("Si puede volar");

// objeto para pinguino 
$pinguino = new Pinguino("https://images.ecestaticos.com/pqIAcGCEagnkjdIBVKVbC9i5FH4=/0x0:1920x1278/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Fe8e%2Fe27%2F2bf%2Fe8ee272bfd36f69679936351209d708c.jpg","Pinguino Pigui", "Pinguino Emperador");

$pinguinoNada = $pinguino -> getNadar("Si puede nadar");
$pinguinoVuela = $pinguino -> getVolar("No puede volar");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/38/38384.png" />
  <title>DATOS AVES</title>
</head>

<body>
  <div class="container">
    <h2 class="text-center">REGISTRO DE PATO</h2>
    <table class="table table-decoracion">
      <tr class="datos">
        <th>FOTO</th>
        <th>NOMBRE</th>
        <th>TIPO</th>
        <th>NADA</th>
        <th>VUELA</th>
      </tr>
      <tr>
        <td>
          <img src="<?php echo $pato -> foto ?>" alt="pato" width="100px" height="100px">
        </td>
        <td><?php echo $pato -> nombre ?></td>
        <td><?php echo $pato -> tipo ?></td>
        <td><?php echo $patoNada; ?></td>
        <td><?php echo $patoVuela; ?></td>
      </tr>
    </table>
  </div>

  <div class="container">
    <h2 class="text-center">REGISTRO DE CONDOR</h2>
    <table class="table table-decoracion">
      <tr class="datos">
        <th>FOTO</th>
        <th>NOMBRE</th>
        <th>TIPO</th>
        <th>NADA</th>
        <th>VUELA</th>
      </tr>
      <tr>
        <td>
          <img src="<?php echo $condor -> foto ?>" alt="condor" width="100px" height="100px">
        </td>
        <td><?php echo $condor -> nombre ?></td>
        <td><?php echo $condor -> tipo ?></td>
        <td><?php echo $condorNada; ?></td>
        <td><?php echo $condorVuela; ?></td>
      </tr>
    </table>
  </div>

  <div class="container">
    <h2 class="text-center">REGISTRO DE GALLINA</h2>
    <table class="table table-decoracion">
      <tr class="datos">
        <th>FOTO</th>
        <th>NOMBRE</th>
        <th>TIPO</th>
        <th>NADA</th>
        <th>VUELA</th>
      </tr>
      <tr>
        <td>
          <img src="<?php echo $gallina -> foto ?>" alt="gallina" width="100px" height="100px">
        </td>
        <td><?php echo $gallina -> nombre ?></td>
        <td><?php echo $gallina -> tipo ?></td>
        <td><?php echo $gallinaNada; ?></td>
        <td><?php echo $gallinaVuela; ?></td>
      </tr>
    </table>
  </div>

  <div class="container">
    <h2 class="text-center">REGISTRO DE PINGUINO</h2>
    <table class="table table-decoracion">
      <tr class="datos">
        <th>FOTO</th>
        <th>NOMBRE</th>
        <th>TIPO</th>
        <th>NADA</th>
        <th>VUELA</th>
      </tr>
      <tr>
        <td>
          <img src="<?php echo $pinguino -> foto ?>" alt="pinguino" width="100px" height="100px">
        </td>
        <td><?php echo $pinguino -> nombre ?></td>
        <td><?php echo $pinguino -> tipo ?></td>
        <td><?php echo $pinguinoNada; ?></td>
        <td><?php echo $pinguinoVuela; ?></td>

      </tr>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
  </script>
</body>

</html>