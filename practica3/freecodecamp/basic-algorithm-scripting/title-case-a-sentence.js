// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/basic-algorithm-scripting/title-case-a-sentence
// Solución comprobada con las pruebas de freeCodeCamp.

function titleCase(str) {
  return str.toLowerCase().split(" ").map(palabra => palabra.charAt(0).toUpperCase() + palabra.slice(1)).join(" ");
}
titleCase("I am a little tea pot");
