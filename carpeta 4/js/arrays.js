let arr = [
  95, 95, 14, 83, 58, 33, 65, 52, 7, 72, 13, 46, 19, 31, 27, 36, 30, 86, 88, 88,
  68, 16, 5, 14, 41, 56, 89, 11, 6, 29, 72, 11, 69, 36, 16, 11, 82, 84, 32, 84,
  95, 98, 76, 99, 100, 12, 89, 1, 92, 27, 66, 48, 38, 49, 30, 40, 87, 19, 31,
  37, 5, 32, 9, 33, 98, 94, 5, 15, 4, 88, 47, 34, 83, 8, 31, 4, 2, 72, 31, 39,
  15, 10, 46, 78, 11, 21, 92, 22, 83, 3, 6, 71, 39, 54, 50, 77, 13, 85, 7, 36,
];

function ordenar(numeros) {
  return numeros.slice().sort((a, b) => a - b);
}

function imparesOrdenados(numeros) {
  return ordenar(numeros.filter((numero) => numero % 2 !== 0));
}

function imparesDosCifras(numeros) {
  return numeros.filter(
    (numero) =>
      numero % 2 !== 0 && numero >= 10 && numero <= 99,
  );
}

function frecuencia(numeros) {
  let conteo = {};
  let resultado = [];

  for (let numero of numeros) {
    if (conteo[numero] === undefined) {
      conteo[numero] = 0;
    }
    conteo[numero]++;
  }

  for (let numero in conteo) {
    resultado.push({ numero: Number(numero), veces: conteo[numero] });
  }

  return resultado;
}

console.log(ordenar(arr));
console.log(imparesOrdenados(arr));
console.log(imparesDosCifras(arr));
console.log(frecuencia(arr));
