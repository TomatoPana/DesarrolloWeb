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
        <div id="game"></div>
      </div>
      <div class="col-4">
        <h3>Juego de Gato</h3>
        <h5>Selecciona el tipo de juego!</h5>
        <select name="gametype" id="selector">
          <option value="1">Jugador 1 vs Jugador 2</option>
          <option value="2">Jugador 1 vs Computadora</option>
        </select>
        <hr>
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