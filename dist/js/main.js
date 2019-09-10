const NumericIntegerRegexp      = /^\d+$/;
const NumericFloatRegexp        = /^\d+(?:\.\d+)?$/;
const TwoValuesOperationsRegexp = /^[\+\*\/\-\%\^]$/;
const OneValueOperationsRegexp  = /^([!]|(\^2)|sin|cos|tan|sqrt){1}$/;
const BinaryNumberRegexp        = /^[0-1]+$/;
const OctalNumberRegexp         = /^[0-7]+$/;
const HexadecimalNumberRegexp   = /^[0-9A-Fa-f]+$/;

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
  var datasend = false;
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
        lblMessages.innerText = "";
        data = {
          tipoOperacion: 1,
          numero1: txtBox1.value,
          operador: txtBox2.value,
          numero2: txtBox3.value,
        }
        datasend = true;
      }
    break;
    case 2:
      if(txtBox1.value.length == 0) {
        lblMessages.innerText = "Ingresa un número en el Campo 1";
      } else if(txtBox2.value.length == 0) {
        lblMessages.innerText = "Ingresa una operación";
      } else if(!NumericFloatRegexp.test(txtBox1.value)){
        lblMessages.innerText = "Ingresa un número en el Campo 1";
      } else if(!OneValueOperationsRegexp.test(txtBox2.value)){
        lblMessages.innerText = "Ingresa una operación";
      } else {
        lblMessages.innerText = "";
        data = {
          tipoOperacion: 2,
          numero1: txtBox1.value,
          operador: txtBox2.value,
          numero2: null,
        }
        datasend = true;
      }
    break;
    case 3:
      if(txtBox1.value.length == 0) {
        lblMessages.innerText = "Ingresa un número en el Campo 1";
      }
      switch(lstBox2.options.selectedIndex){
        case 0:
          lblMessages.innerText = "Selecciona una conversión";
        break;
        case 1:
          if(!NumericIntegerRegexp.test(txtBox1.value)){
            lblMessages.innerText = "Ingresa un número decimal";
          } else {
            lblMessages.innerText = "";
            data = {
              tipoOperacion: 3,
              numero1: txtBox1.value,
              operador: 1,
              numero2: null,
            }
            datasend = true;
          }
        break;
        case 2:
          if(!BinaryNumberRegexp.test(txtBox1.value)){
            lblMessages.innerText = "Ingresa un número binario";
          } else {
            lblMessages.innerText = "";
            data = {
              tipoOperacion: 3,
              numero1: txtBox1.value,
              operador: 2,
              numero2: null,
            }
            datasend = true;
          }
        break;
        case 3:
            if(!NumericIntegerRegexp.test(txtBox1.value)){
              lblMessages.innerText = "Ingresa un número decimal";
            } else {
              lblMessages.innerText = "";
              data = {
                tipoOperacion: 3,
                numero1: txtBox1.value,
                operador: 3,
                numero2: null,
              }
              datasend = true;
            }
        break;
        case 4:
            if(!OctalNumberRegexp.test(txtBox1.value)){
              lblMessages.innerText = "Ingresa un número octal";
            } else {
              lblMessages.innerText = "";
              data = {
                tipoOperacion: 3,
                numero1: txtBox1.value,
                operador: 4,
                numero2: null,
              }
              datasend = true;
            }
        break;
        case 5:
            if(!NumericIntegerRegexp.test(txtBox1.value)){
              lblMessages.innerText = "Ingresa un número decimal";
            } else {
              lblMessages.innerText = "";
              data = {
                tipoOperacion: 3,
                numero1: txtBox1.value,
                operador: 5,
                numero2: null,
              }
              datasend = true;
            }
        break;
        case 6:
            if(!HexadecimalNumberRegexp.test(txtBox1.value)){
              lblMessages.innerText = "Ingresa un número decimal";
            } else {
              lblMessages.innerText = "";
              data = {
                tipoOperacion: 3,
                numero1: txtBox1.value,
                operador: 6,
                numero2: null,
              }
              datasend = true;
            }
        break;
        default:
          lblMessages.innerText = "Selecciona una conversión";
        break;
      }
    break;
    default:
      lblMessages.innerText = "Selecciona un tipo de operación";
    break;
  }

  if(datasend){
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
    });
  }

}