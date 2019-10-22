<?php
class TicTacToe {
  public function getStadistics($datos = array()){
    return array('data' => $datos);
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