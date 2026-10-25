// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/factorialize-a-number
// Solución comprobada con las pruebas de freeCodeCamp.

function factorialize(num) {
  let resultado = 1;
  for (let i = 2; i <= num; i++) {
    resultado *= i;
  }
  return resultado;
}
factorialize(5);
