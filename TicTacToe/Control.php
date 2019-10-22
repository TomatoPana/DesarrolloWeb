<?php
header("Content-Type: application/json");
require_once('./TicTacToe.php');
$Juego = new TicTacToe();
//¿Que se va a hacer?
if(isset($_GET['action'])){
  switch($_GET['action']){
    case '1':
      //Inicio del juego
      $board = $Juego->startGame();
      echo json_encode(array('status' => 'ok', 'response' => $board));
    break;
    case '2':
      //Turno de la computadora
      $response = $Juego->sendPosition();
      echo json_encode(array('status' => 'ok', 'response' => $response));
    break;
    case '3':
      //Mostrar estadísticas
      if(isset($_GET['data'])){
        $datos = explode(",", $_GET['data']);
        foreach ($datos as $key => $value) {
          //0=Ganó X; 1=Ganó O; 2=Empate
          if($value != "0" && $value != "1" && $value != "2"){
            echo json_encode(array('status' => 'error', 'response' => "BOI!"));
            exit;
          }
        }
        $chart = $Juego->getStadistics($datos);
        echo json_encode(array('status' => 'ok', 'response' => $chart));
      } else {
        echo json_encode(array('status' => 'error', 'response' => "BOI!"));
      }
    break;
    default:
      //Mal decision
      echo json_encode(array('status' => 'error', 'response' => "BOI!"));
    break;
  }
}