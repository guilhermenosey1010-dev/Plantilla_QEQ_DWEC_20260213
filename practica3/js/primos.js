"use strict";

function validarLimite(valor) {
  if (String(valor).trim() === "") {
    throw new Error("Introduce un número entero entre 1 y 100000.");
  }
  const numero = Number(valor);
  if (!Number.isSafeInteger(numero) || numero < 1 || numero > 100000) {
    throw new Error("El número debe ser un entero entre 1 y 100000.");
  }
  return numero;
}

function esPrimo(numero) {
  if (!Number.isSafeInteger(numero) || numero < 2) return false;
  for (let divisor = 2; divisor <= Math.sqrt(numero); divisor++) {
    if (numero % divisor === 0) return false;
  }
  return true;
}

function obtenerPrimos(limite) {
  const numero = validarLimite(limite);
  const primos = [];
  for (let candidato = 2; candidato <= numero; candidato++) {
    if (esPrimo(candidato)) primos.push(candidato);
  }
  return primos;
}

if (typeof document !== "undefined") {
  document.querySelector("#formulario-primos").addEventListener("submit", function (evento) {
    evento.preventDefault();
    const estado = document.querySelector("#estado");
    const resultado = document.querySelector("#resultado");
    estado.className = "";
    resultado.replaceChildren();

    try {
      const limite = validarLimite(document.querySelector("#numero").value);
      const primos = obtenerPrimos(limite);
      // El 1 se añade solo a la presentación; obtenerPrimos nunca lo cuenta.
      const numeros = [1, ...primos];
      const tabla = document.createElement("table");
      const titulo = document.createElement("caption");
      titulo.textContent = "Resultado entre 1 y " + limite + " (1 como referencia)";
      tabla.append(titulo);
      const cuerpo = document.createElement("tbody");
      let fila;
      numeros.forEach(function (numero, indice) {
        if (indice % 10 === 0) {
          fila = document.createElement("tr");
          cuerpo.append(fila);
        }
        const celda = document.createElement("td");
        celda.textContent = numero;
        if (numero === 1) {
          celda.className = "referencia";
          celda.title = "El 1 es una referencia, no un número primo.";
        }
        fila.append(celda);
      });
      tabla.append(cuerpo);
      resultado.append(tabla);
      estado.textContent = "Se han encontrado " + primos.length + " números primos hasta " + limite + ".";
    } catch (error) {
      estado.textContent = error.message;
      estado.className = "error";
    }
  });
}

if (typeof module !== "undefined" && module.exports) {
  module.exports = { validarLimite, esPrimo, obtenerPrimos };
}
