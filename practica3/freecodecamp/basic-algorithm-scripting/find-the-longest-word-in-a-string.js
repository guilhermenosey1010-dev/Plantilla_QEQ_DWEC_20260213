// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/find-the-longest-word-in-a-string
// Solución comprobada con las pruebas de freeCodeCamp.

function findLongestWordLength(str) {
  let mayor = 0;
  for (const palabra of str.split(" ")) {
    if (palabra.length > mayor) mayor = palabra.length;
  }
  return mayor;
}
findLongestWordLength("The quick brown fox jumped over the lazy dog");
