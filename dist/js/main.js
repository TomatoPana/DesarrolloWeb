'use strict';

const NumericIntegerRegexp = /^\d+$/;
const NumericFloatRegexp = /^\d+(?:\.\d+)?$/;

const formCalculadora = document.getElementById("formCalculadora");
const lstbox1 = document.getElementById("lstbox1");
const lblMessages = document.getElementById("lblMessages");

const txtBox1 = document.getElementById("txtBox1");
const lblBox1 = document.getElementById("lblBox1");

const txtBox2 = document.getElementById("txtBox2");
const lblBox2 = document.getElementById("lblBox2");

const txtBox3 = document.getElementById("txtBox3");
const lblBox3 = document.getElementById("lblBox3");

lstbox1.onchange = function(event) {
  switch(lstbox1.options.selectedIndex){
    case 1:
      txtBox1.hidden = false;
      lblBox1.hidden = false;
      txtBox2.hidden = false;
      lblBox2.hidden = false;
      txtBox3.hidden = false;
      lblBox3.hidden = false;
    break;
    case 2:
      txtBox1.hidden = false;
      lblBox1.hidden = false;
      txtBox2.hidden = false;
      lblBox2.hidden = false;
      txtBox3.hidden = true;
      lblBox3.hidden = true;
    break;
    case 3:
      txtBox1.hidden = false;
      lblBox1.hidden = false;
      txtBox2.hidden = false;
      lblBox2.hidden = false;
      txtBox3.hidden = true;
      lblBox3.hidden = true;
    break;
    default:
      txtBox1.hidden = true;
      lblBox1.hidden = true;
      txtBox2.hidden = true;
      lblBox2.hidden = true;
      txtBox3.hidden = true;
      lblBox3.hidden = true;
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