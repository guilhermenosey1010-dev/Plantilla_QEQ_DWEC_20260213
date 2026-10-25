// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/truncate-a-string
// Solución comprobada con las pruebas de freeCodeCamp.

function truncateString(str, num) {
  return str.length > num ? str.slice(0, num) + "..." : str;
}
truncateString("A-tisket a-tasket A green and yellow basket", 8);
