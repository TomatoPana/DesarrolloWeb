<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="./Control.php" method="post" id="formCalculadora">
    <h4 id="lblMessages"></h4>
    <label for="lstBox1">Selecciona el tipo de operación:</label>
    <select name="lstBox1" id="lstBox1">
      <option value="0" selected>Selecciona</option>
      <option value="1">Operaciones con dos elementos</option>
      <option value="2">Operaciones con un elemento</option>
      <option value="3">Conversiones</option>
    </select>
    <br>

    <label hidden id="lblBox1" for="txtBox1">Numero 1</label>
    <input hidden type="text" name="txtBox1" id="txtBox1">
    <br>

    <label hidden id="lblBox2" for="txtBox2">Operación</label>
    <input hidden type="text" name="txtBox2" id="txtBox2">
    <br>

    <label hidden id="lblBox3" for="lstBox2">Conversion</label>
    <select hidden name="lstBox2" id="lstBox2">
      <option selected value="0">Selecciona</option>
      <option value="1">Decimal a Binaria</option>
      <option value="2">Binaria a Decimal</option>
      <option value="3">Decimal a Octal</option>
      <option value="4">Octal a Decimal</option>
      <option value="5">Decimal a Hexadecimal</option>
      <option value="6">Hexadecimal a Decimal</option>
    </select>
    <br>

    <label hidden id="lblBox4" for="txtBox3">Numero 2</label>
    <input hidden type="text" name="txtBox3" id="txtBox3">
    <br>
    
    <input type="submit" value="Calcular">
  </form>
  <script src="../dist/js/main.js"></script>
</body>
</html>