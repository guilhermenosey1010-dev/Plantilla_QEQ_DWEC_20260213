// Reto: https://www.freecodecamp.org/espanol/learn/javascript-algorithms-and-data-structures/debugging/prevent-infinite-loops-with-a-valid-terminal-condition
// Solución comprobada con las pruebas de freeCodeCamp.

function myFunc() {
  for (let i = 1; i <= 4; i += 2) {
    console.log("Still going!");
  }
}
