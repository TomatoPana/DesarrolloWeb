const NumericIntegerRegexp = /^\d+$/;
const NumericFloatRegexp = /^\d+(?:\.\d+)?$/;
const TwoValuesOperationsRegexp = /^[\+\*\/\-\%\^]$/;
const OneValueOperationsRegexp = /^[!]|(\^2)|sin|cos|tan|sqrt$/;
const BinaryNumberRegexp = /^[0-1]+&/;
const OctalNumberRegexp = /^[0-7]+$/;
const HexadecimalNumberRegexp = /^[0-9A-Fa-f]+$/;

const formCalculadora  = document.getElementById("formCalculadora");
const lstBox1          = document.getElementById("lstBox1");
const lblMessages      = document.getElementById("lblMessages");

const lblBox1          = document.getElementById("lblBox1");
const txtBox1          = document.getElementById("txtBox1");

const lblBox2          = document.getElementById("lblBox2");
const txtBox2          = document.getElementById("txtBox2");

const lblBox3          = document.getElementById("lblBox3");
const lstBox2          = document.getElementById("lstBox2");

const lblBox4          = document.getElementById("lblBox4");
const txtBox3          = document.getElementById("txtBox3");

lstBox1.onchange = function() {
  switch(lstBox1.options.selectedIndex){
    case 0:
      lblBox1.hidden = true;
      txtBox1.hidden = true;
      lblBox2.hidden = true;
      txtBox2.hidden = true;
      lblBox3.hidden = true;
      lstBox2.hidden = true;
      lblBox4.hidden = true;
      txtBox3.hidden = true;
    break;
    case 1:
      lblBox1.hidden = false;
      txtBox1.hidden = false;
      lblBox2.hidden = false;
      txtBox2.hidden = false;
      lblBox3.hidden = true;
      lstBox2.hidden = true;
      lblBox4.hidden = false;
      txtBox3.hidden = false;
    break;
    case 2:
      lblBox1.hidden = false;
      txtBox1.hidden = false;
      lblBox2.hidden = false;
      txtBox2.hidden = false;
      lblBox3.hidden = true;
      lstBox2.hidden = true;
      lblBox4.hidden = true;
      txtBox3.hidden = true;
    break;
    case 3:
      lblBox1.hidden = false;
      txtBox1.hidden = false;
      lblBox2.hidden = true;
      txtBox2.hidden = true;
      lblBox3.hidden = false;
      lstBox2.hidden = false;
      lblBox4.hidden = true;
      txtBox3.hidden = true;
    break;
    default:
      lblBox1.hidden = true;
      txtBox1.hidden = true;
      lblBox2.hidden = true;
      txtBox2.hidden = true;
      lblBox3.hidden = true;
      lstBox2.hidden = true;
      lblBox4.hidden = true;
      txtBox3.hidden = true;
      lblMessages.innerText = "¿Que hiciste?";
    break;
  }
}

formCalculadora.onsubmit = function(event) {
  var data = {};
  event.preventDefault();
  switch(lstBox1.options.selectedIndex){
    case 0:
      lblMessages.innerText = "Selecciona un tipo de operación";
    break;
    case 1:
      if(txtBox1.value.length == 0) {
        lblMessages.innerText = "Ingresa un número en el Campo 1";
      } else if(txtBox2.value.length == 0) {
        lblMessages.innerText = "Ingresa una operación";
      } else if(txtBox3.value.length == 0) {
        lblMessages.innerText = "Ingresa un número en el Campo 2";
      } else if(!NumericFloatRegexp.test(txtBox1.value)){
        lblMessages.innerText = "Ingresa un número en el Campo 1";
      } else if(!TwoValuesOperationsRegexp.test(txtBox2.value)){
        lblMessages.innerText = "Ingresa una operación";
      } else if(!NumericFloatRegexp.test(txtBox3.value)){
        lblMessages.innerText = "Ingresa un número en el Campo 2";
      } else {
        data = {
          tipoOperacion: 1,
          numero1: txtBox1.value,
          operador: txtBox2.value,
          numero2: txtBox3.value,
        }
      }
    break;
    case 2:

    break;
    case 3:

    break;
    default:

    break;
  }
  /* else if(txtBox1.value.length == 0){
    lblMessages.innerText = "El campo no puede ir vacío";
    event.preventDefault();
  } else if(!NumericIntegerRegexp.test(txtBox1.value)){
    lblMessages.innerText = "El campo solo puede contener números";
    event.preventDefault();
  } else {
    lblMessages.innerText = "Todo bien";
    event.preventDefault();
  }
  const data = {
    tipoOperacion: 1,
    numero1: 42,
    operador: 1,
    numero2: 16,
  }
  fetch("Proyecto/Control.php", {
    method: 'post',
    headers: {
      "Content-type": "application/json; charset=UTF-8"
    },
    body: JSON.stringify(data),
  }).then(function(response){
    return response.json();
  }).then(function(Json){
    console.log(Json);
  }).catch(function(error){
    console.error('Error: ', error);
  }); */
  console.log(data);
}