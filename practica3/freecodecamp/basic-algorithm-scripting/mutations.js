// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/mutations
// Solución comprobada con las pruebas de freeCodeCamp.

function mutation(arr) {
  const origen = arr[0].toLowerCase();
  return arr[1].toLowerCase().split("").every(letra => origen.includes(letra));
}
mutation(["hello", "hey"]);
