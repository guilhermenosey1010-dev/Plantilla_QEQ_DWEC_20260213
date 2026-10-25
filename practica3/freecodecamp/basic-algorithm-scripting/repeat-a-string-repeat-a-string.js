// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/repeat-a-string-repeat-a-string
// Solución comprobada con las pruebas de freeCodeCamp.

function repeatStringNumTimes(str, num) {
  let resultado = "";
  for (let i = 0; i < num; i++) {
    resultado += str;
  }
  return resultado;
}
repeatStringNumTimes("abc", 3);
