<?php
class TicTacToe {
  public function getStadistics($datos = array()){
    $vecesX = 0;
    $vecesO = 0;
    $empate = 0;
    foreach ($datos as $key => $value) {
      if($value == '0'){
        $vecesX++;
      } else if($value == '1') {
        $vecesO++;
      } else if($value == '2') {
        $empate++;
      }
    }
    return array(
      'datasets' => [
        array(
          "data" => array($vecesX,$vecesO,$empate),
          "label" => "No. de victorias",
          "backgroundColor" => [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)"
          ],
          "borderColor" => [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)"
          ],
          "borderWidth" => "1",
        )
      ],
      "labels" => ["Jugador 1 (X)", "Jugador 2 (O)", "Empate"]
    );
  }

  public function sendPosition() {
    $row = rand(0,2);
    $column = rand(0,2);
    return array('row' => $row, 'column' => $column);
  }

  public function startGame() {
    return '
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