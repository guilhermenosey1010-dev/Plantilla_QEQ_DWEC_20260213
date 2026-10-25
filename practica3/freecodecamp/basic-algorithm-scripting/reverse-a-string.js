// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/reverse-a-string
// Solución comprobada con las pruebas de freeCodeCamp.

function reverseString(str) {
  return str.split("").reverse().join("");
}
reverseString("hello");
