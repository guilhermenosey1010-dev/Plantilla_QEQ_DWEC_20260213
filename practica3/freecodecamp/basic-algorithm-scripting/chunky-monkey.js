// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/chunky-monkey
// Solución comprobada con las pruebas de freeCodeCamp.

function chunkArrayInGroups(arr, size) {
  const grupos = [];
  for (let i = 0; i < arr.length; i += size) {
    grupos.push(arr.slice(i, i + size));
  }
  return grupos;
}
chunkArrayInGroups(["a", "b", "c", "d"], 2);
