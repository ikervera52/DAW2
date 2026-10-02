'use strict'

// Practica 1 Tema 1

// 1
let n1 = 16;

n1 = 16.678;

let entera = parseInt(n1);

document.write(entera);

let decimal = n1;

let redArriba = Math.round(decimal);

document.write("<br>");

document.write(redArriba);

let redAbajo = Math.floor(decimal);

document.write("<br>");

document.write(redAbajo);

let dosDecimanles = Math.trunc(decimal, 2);

document.write("<br>");

document.write(dosDecimanles);

// 2

let text = "Hola";

document.write("<br>");
document.write(text.toUpperCase());

document.write("<br>");
document.write("Letra en la posicion 2: " + text.charAt(2));

document.write("<br>");
document.write("Letra en la posicion 4: " + text.charAt(4));

document.write("<br>");
document.write('Incluye la J: ' + text.includes("j"));

document.write("<br>");
document.write("Posicion letra O: " + text.indexOf("o" || "O"));

document.write("<br>");
document.write("Cantidad de letras: " + text);

let textAmpliado = text + " buenos dias";


document.write("<br>");
document.write(textAmpliado);
document.write("<br>");
document.write("De posicion 3 a 6: " + textAmpliado.substring(3,7));

let fechaHoy = new Date();

document.write("<br>");
document.write(fechaHoy);
