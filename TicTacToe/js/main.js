$(function() {
  var turno = true; //true for 'X' false for 'O'
  var gameOver = false;
  var gameStatus = [
    [null, null, null],
    [null, null, null],
    [null, null, null]
  ];
  var twoPlayers = false;
  var count = 0;
  $("#00").click(function(){
    if($("#00").text().length != 0){
      console.warn("Already set [0,0]");
    } else {
      if(!gameOver){
        if(twoPlayers){
          if(turno){
            $("#00").html("X");
            turno = !turno; 
            $("#estado").html("O");
            gameStatus[0][0] = true;
            count++;
          } else {
            $("#00").html("O");
            turno = !turno; 
            $("#estado").html("X");
            gameStatus[0][0] = false;
            count++;
          }
        } else {
          $("#00").html("X");
          gameStatus[0][0] = true;
          count++;
          do {
            var pcRow = Math.floor(Math.random()*3);
            var pcColumn = Math.floor(Math.random()*3);
          } while (gameStatus[pcRow][pcColumn] !== null);
          $("#"+pcRow+pcColumn).html("O");
          gameStatus[pcRow][pcColumn] = false;
          count++;
        }
        checkGameStatus();
      } else {
        $("#estado").html("Juego terminado");
      }
    }
  });

  $("#01").click(function(){
    if($("#01").text().length != 0){
      console.warn("Already set [0,1]");
    } else {
      if(!gameOver){
        if(turno){
          $("#01").html("X");
          turno = !turno; 
          $("#estado").html("O");
          gameStatus[0][1] = true;
          count++;
        } else {
          $("#01").html("O");
          turno = !turno; 
          $("#estado").html("X");
          gameStatus[0][1] = false;
          count++;
        }
        checkGameStatus();
      } else {
        $("#estado").html("Juego terminado");
      }
    }
  });

  $("#02").click(function(){
    if($("#02").text().length != 0){
      console.warn("Already set [0,2]");
    } else {
      if(!gameOver){
        if(turno){
          $("#02").html("X");
          turno = !turno; 
          $("#estado").html("O");
          gameStatus[0][2] = true;
          count++;
        } else {
          $("#02").html("O");
          turno = !turno; 
          $("#estado").html("X");
          gameStatus[0][2] = false;
          count++;
        }
        checkGameStatus();
      } else {
        $("#estado").html("Juego terminado");
      }
    }
  });

  $("#10").click(function(){
    if($("#10").text().length != 0){
      console.warn("Already set [1,0]");
    } else {
      if(!gameOver){
        if(turno){
          $("#10").html("X");
          turno = !turno; 
          $("#estado").html("O");
          gameStatus[1][0] = true;
          count++;
        } else {
          $("#10").html("O");
          turno = !turno; 
          $("#estado").html("X");
          gameStatus[1][0] = false;
          count++;
        }
        checkGameStatus();
      } else {
        $("#estado").html("Juego terminado");
      }
    }
  });

  $("#11").click(function(){
    if($("#11").text().length != 0){
      console.warn("Already set [1,1]");
    } else {
      if(!gameOver){
        if(turno){
          $("#11").html("X");
          turno = !turno; 
          $("#estado").html("O");
          gameStatus[1][1] = true;
          count++;
        } else {
          $("#11").html("O");
          turno = !turno; 
          $("#estado").html("X");
          gameStatus[1][1] = false;
          count++;
        }
        checkGameStatus();
      } else {
        $("#estado").html("Juego terminado");
      }
    }
  });

  $("#12").click(function(){
    if($("#12").text().length != 0){
      console.warn("Already set [1,2]");
    } else {
      if(!gameOver) {
        if(turno){
          $("#12").html("X");
          turno = !turno; 
          $("#estado").html("O");
          gameStatus[1][2] = true;
          count++;
        } else {
          $("#12").html("O");
          turno = !turno; 
          $("#estado").html("X");
          gameStatus[1][2] = false;
          count++;
        }
        checkGameStatus();
      } else {
        $("#estado").html("Juego terminado");
      }
    }
  });

  $("#20").click(function(){
    if($("#20").text().length != 0){
      console.warn("Already set [2,0]");
    } else {
      if(!gameOver){
        if(turno){
          $("#20").html("X");
          turno = !turno; 
          $("#estado").html("O");
          gameStatus[2][0] = true;
          count++;
        } else {
          $("#20").html("O");
          turno = !turno; 
          $("#estado").html("X");
          gameStatus[2][0] = false;
          count++;
        }
        checkGameStatus();
      } else {
        $("#estado").html("Juego terminado");
      }
    }
  });

  $("#21").click(function(){
    if($("#21").text().length != 0){
      console.warn("Already set [2,1]");
    } else {
      if(!gameOver){
        if(turno){
          $("#21").html("X");
          turno = !turno; 
          $("#estado").html("O");
          gameStatus[2][1] = true;
          count++;
        } else {
          $("#21").html("O");
          turno = !turno; 
          $("#estado").html("X");
          gameStatus[2][1] = false;
          count++;
        }
        checkGameStatus();
      } else {
        $("#estado").html("Juego terminado");
      }
    }
  });

  $("#22").click(function(){
    if($("#22").text().length != 0){
      console.warn("Already set [2,2]");
    } else {
      if(!gameOver){
        if(turno){
          $("#22").html("X");
          turno = !turno; 
          $("#estado").html("O");
          gameStatus[2][2] = true;
          count++;
        } else {
          $("#22").html("O");
          turno = !turno; 
          $("#estado").html("X");
          gameStatus[2][2] = false;
          count++;
        }
        checkGameStatus();
      } else {
        $("#estado").html("Juego terminado");
      }
    }
  });

  function checkGameStatus() {
    if(
      (gameStatus[0][0] != null && gameStatus[0][1] != null && gameStatus[0][2] != null) && (gameStatus[0][0] === gameStatus[0][1] && gameStatus[0][1] === gameStatus[0][2]) ||
      (gameStatus[1][0] != null && gameStatus[1][1] != null && gameStatus[1][2] != null) && (gameStatus[1][0] === gameStatus[1][1] && gameStatus[1][1] === gameStatus[1][2]) ||
      (gameStatus[2][0] != null && gameStatus[2][1] != null && gameStatus[2][2] != null) && (gameStatus[2][0] === gameStatus[2][1] && gameStatus[2][1] === gameStatus[2][2]) ||
      (gameStatus[0][0] != null && gameStatus[1][0] != null && gameStatus[2][0] != null) && (gameStatus[0][0] === gameStatus[1][0] && gameStatus[1][0] === gameStatus[2][0]) ||
      (gameStatus[0][1] != null && gameStatus[1][1] != null && gameStatus[2][1] != null) && (gameStatus[0][1] === gameStatus[1][1] && gameStatus[1][1] === gameStatus[2][1]) ||
      (gameStatus[0][2] != null && gameStatus[1][2] != null && gameStatus[2][2] != null) && (gameStatus[0][2] === gameStatus[1][2] && gameStatus[1][2] === gameStatus[2][2]) ||
      (gameStatus[0][0] != null && gameStatus[1][1] != null && gameStatus[2][2] != null) && (gameStatus[0][0] === gameStatus[1][1] && gameStatus[1][1] === gameStatus[2][2]) ||
      (gameStatus[0][2] != null && gameStatus[1][1] != null && gameStatus[2][0] != null) && (gameStatus[0][2] === gameStatus[1][1] && gameStatus[1][1] === gameStatus[2][0])
    ) {
      $("#turnos").hide();
      $("#ganador").html("El ganador es " + ((turno) ? "O" : "X"));
      $("#estado").html("Juego terminado");
      gameOver = true;
    } else {
      if(count >= 9){
        $("#turnos").hide();
        $("#ganador").html("Empate!");
        $("#estado").html("Juego terminado");
        gameOver = true;
      }
    }
  }
});