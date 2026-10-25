// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/return-largest-numbers-in-arrays
// Solución comprobada con las pruebas de freeCodeCamp.

function largestOfFour(arr) {
  return arr.map(grupo => Math.max(...grupo));
}
largestOfFour([[4, 5, 1, 3], [13, 27, 18, 26], [32, 35, 37, 39], [1000, 1001, 857, 1]]);
