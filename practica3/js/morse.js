"use strict";

// Tabla del alfabeto indicado en el enunciado. Internamente usamos guiones.
const ALFABETO_MORSE = Object.freeze({
  A: ".-", B: "-...", C: "-.-.", CH: "----", D: "-..", E: ".",
  F: "..-.", G: "--.", H: "....", I: "..", J: ".---", K: "-.-",
  L: ".-..", M: "--", N: "-.", Ñ: "--.--", O: "---", P: ".--.",
  Q: "--.-", R: ".-.", S: "...", T: "-", U: "..-", Ü: "..--",
  V: "...-", W: ".--", X: "-..-", Y: "-.--", Z: "--..",
  "0": "-----", "1": ".----", "2": "..---", "3": "...--", "4": "....-",
  "5": ".....", "6": "-....", "7": "--...", "8": "---..", "9": "----.",
  ".": ".-.-.-", ",": "--..--", "?": "..--..", '"': ".-..-.", "/": "-..-."
});

const MORSE_A_TEXTO = Object.fromEntries(
  Object.entries(ALFABETO_MORSE).map(([letra, codigo]) => [codigo, letra])
);

function textoAMorse(texto) {
  // Quitamos solo las tildes de las vocales, sin perder Ñ ni Ü.
  const vocales = { Á: "A", É: "E", Í: "I", Ó: "O", Ú: "U" };
  const normalizado = texto.normalize("NFC").toUpperCase()
    .replace(/[ÁÉÍÓÚ]/g, letra => vocales[letra]).trim();

  return normalizado.split(/\s+/).map(palabra => {
    const codigos = [];
    for (let i = 0; i < palabra.length; i++) {
      let letra = palabra[i];
      // CH aparece como un signo propio en la tabla de referencia.
      if (palabra.slice(i, i + 2) === "CH") {
        letra = "CH";
        i++;
      }
      if (!Object.hasOwn(ALFABETO_MORSE, letra)) {
        throw new Error('Carácter no admitido: "' + letra + '".');
      }
      codigos.push(ALFABETO_MORSE[letra]);
    }
    return codigos.join(" ");
  }).join("  ").replace(/-/g, "—");
}

function morseATexto(morse) {
  const normalizado = morse.trim().replace(/[—–]/g, "-")
    .replace(/·/g, ".").replace(/[\t\r\n]+/g, "  ").replace(/\u00a0/g, " ");
  return normalizado.split(/ {2,}/).map(palabra => {
    return palabra.split(" ").map(codigo => {
      if (!Object.hasOwn(MORSE_A_TEXTO, codigo)) {
        throw new Error('Código morse desconocido: "' + codigo + '".');
      }
      return MORSE_A_TEXTO[codigo];
    }).join("");
  }).join(" ");
}

function convertirMensaje(entrada) {
  if (typeof entrada !== "string" || entrada.trim() === "") {
    throw new Error("Escribe un mensaje para convertir.");
  }
  const esMorse = /^[.·\-—–\s]+$/u.test(entrada);
  return {
    tipo: esMorse ? "Morse → texto" : "Texto → morse",
    resultado: esMorse ? morseATexto(entrada) : textoAMorse(entrada)
  };
}

if (typeof document !== "undefined") {
  function mostrarConversion(entrada) {
    const estado = document.querySelector("#estado");
    const conversion = document.querySelector("#conversion");
    estado.className = "";
    conversion.hidden = true;

    if (entrada === null) {
      estado.textContent = "Conversión cancelada. Puedes introducir otro mensaje.";
      return;
    }
    try {
      const conversionRealizada = convertirMensaje(entrada);
      // textContent muestra el mensaje como texto, sin interpretarlo como HTML.
      document.querySelector("#entrada").textContent = entrada;
      document.querySelector("#tipo").textContent = conversionRealizada.tipo;
      document.querySelector("#resultado").textContent = conversionRealizada.resultado;
      estado.textContent = "Conversión realizada correctamente.";
      conversion.hidden = false;
    } catch (error) {
      estado.textContent = error.message;
      estado.className = "error";
    }
  }

  document.querySelector("#convertir").addEventListener("click", function () {
    try {
      const entrada = window.prompt("Escribe texto o morse. Usa un espacio entre letras y dos entre palabras:");
      mostrarConversion(entrada);
    } catch (error) {
      // Algunos navegadores integrados no implementan prompt().
      // En Chrome, Edge y Firefox se usa el prompt solicitado en el ejercicio.
      document.querySelector("#mensaje-alternativo").value = "";
      document.querySelector("#dialogo-mensaje").showModal();
    }
  });
  document.querySelector("#dialogo-mensaje").addEventListener("close", function () {
    mostrarConversion(this.returnValue === "convertir"
      ? document.querySelector("#mensaje-alternativo").value : null);
  });
}

if (typeof module !== "undefined" && module.exports) {
  module.exports = { ALFABETO_MORSE, textoAMorse, morseATexto, convertirMensaje };
}
