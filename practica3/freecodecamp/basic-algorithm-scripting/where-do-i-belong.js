// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/where-do-i-belong
// Solución comprobada con las pruebas de freeCodeCamp.

function getIndexToIns(arr, num) {
  const ordenado = arr.slice().sort((a, b) => a - b);
  const indice = ordenado.findIndex(valor => valor >= num);
  return indice === -1 ? ordenado.length : indice;
}
getIndexToIns([40, 60], 50);
