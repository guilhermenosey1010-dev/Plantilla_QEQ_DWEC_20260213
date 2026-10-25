// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/slice-and-splice
// Solución comprobada con las pruebas de freeCodeCamp.

function frankenSplice(arr1, arr2, n) {
  const copia = arr2.slice();
  copia.splice(n, 0, ...arr1);
  return copia;
}
frankenSplice([1, 2, 3], [4, 5, 6], 1);
