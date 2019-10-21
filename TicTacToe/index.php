<?php
class TicTacToe {
 
  function imprimirJuego() {
    echo '
    <table class="game">
    <tbody>
      <tr class="gameRow">
        <td class="gameCell x00" id="00"></td>
        <td class="gameCell x01" id="01"></td>
        <td class="gameCell x02" id="02"></td>
      </tr>
      <tr class="gameRow">
        <td class="gameCell x10" id="10"></td>
        <td class="gameCell x11" id="11"></td>
        <td class="gameCell x12" id="12"></td>
      </tr>
      <tr class="gameRow">
        <td class="gameCell x20" id="20"></td>
        <td class="gameCell x21" id="21"></td>
        <td class="gameCell x22" id="22"></td>
      </tr>
    </tbody>
  </table>
    ';
  }
}

$juego = new TicTacToe();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-8">
        <?php $juego->imprimirJuego(); ?>
      </div>
      <div class="col-4">
        <h3>Juego de Gato</h3>
        <h6 id="turnos">Siguiente turno: <h6 id="turno"></h6></h6>
        <h6 id="estado">X</h6>
        <h6 id="ganador"></h6>
      </div>
    </div>
  </div>
  <script src="./js/jquery.js"></script>
  <script src="./js/popper.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>