// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/finders-keepers
// Solución comprobada con las pruebas de freeCodeCamp.

function findElement(arr, func) {
  for (const elemento of arr) {
    if (func(elemento)) return elemento;
  }
  return undefined;
}
findElement([1, 2, 3, 4], num => num % 2 === 0);
