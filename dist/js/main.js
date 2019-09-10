'use strict';

const NumericIntegerRegexp = /^\d+$/;
const NumericFloatRegexp = /^\d+(?:\.\d+)?$/;
const TwoValuesOperationsRegexp = /^[\+\*\/\-\%\^]$/;
const OneValueOperationsRegexp = /^[!]|(^2)|sin|cos|tan|sqrt$/;

const formCalculadora = document.getElementById("formCalculadora");
const lstBox1 = document.getElementById("lstBox1");
const lblMessages = document.getElementById("lblMessages");

const lblBox1 = document.getElementById("lblBox1");
const txtBox1 = document.getElementById("txtBox1");

const lblBox2 = document.getElementById("lblBox2");
const txtBox2 = document.getElementById("txtBox2");

const lblBox3 = document.getElementById("lblBox3");
const lstBox2 = document.getElementById("lstBox2");

const lblBox4 = document.getElementById("lblBox4");
const txtBox3 = document.getElementById("txtBox3");

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
  if(txtBox1.value.length == 0){
    lblMessages.innerText = "El campo no puede ir vacío";
    event.preventDefault();
  } else if(!NumericIntegerRegexp.test(txtBox1.value)){
    lblMessages.innerText = "El campo solo puede contener números";
    event.preventDefault();
  } else {
    lblMessages.innerText = "Todo bien";
    event.preventDefault();
  }
}