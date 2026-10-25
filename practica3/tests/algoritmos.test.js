"use strict";
const test = require("node:test");
const assert = require("node:assert/strict");
const { ALFABETO_MORSE, textoAMorse, morseATexto, convertirMensaje } = require("../js/morse.js");
const { esPrimo, obtenerPrimos, validarLimite } = require("../js/primos.js");

test("morse: usa window.prompt y muestra el resultado o la cancelación", () => {
  const fs = require("node:fs");
  const vm = require("node:vm");
  const elementos = new Map();
  function elemento(selector) {
    if (!elementos.has(selector)) {
      elementos.set(selector, {
        hidden: true, textContent: "", className: "", eventos: {},
        addEventListener(tipo, accion) { this.eventos[tipo] = accion; }
      });
    }
    return elementos.get(selector);
  }
  let entrada = "HOLA MUNDO";
  let llamadas = 0;
  const contexto = {
    document: { querySelector: elemento },
    window: { prompt() { llamadas++; return entrada; } }
  };
  vm.runInNewContext(fs.readFileSync(require.resolve("../js/morse.js"), "utf8"), contexto);
  elemento("#convertir").eventos.click();
  assert.equal(llamadas, 1);
  assert.equal(elemento("#resultado").textContent, ".... ——— .—.. .—  —— ..— —. —.. ———");
  assert.equal(elemento("#conversion").hidden, false);
  entrada = null;
  elemento("#convertir").eventos.click();
  assert.match(elemento("#estado").textContent, /cancelada/);
  assert.equal(elemento("#conversion").hidden, true);
});

test("morse: conversión en ambos sentidos y dos espacios entre palabras", () => {
  const codigo = ".... ——— .—.. .—  —— ..— —. —.. ———";
  assert.equal(textoAMorse("Hola mundo"), codigo);
  assert.equal(morseATexto(codigo), "HOLA MUNDO");
  assert.equal(convertirMensaje("... --- ...").resultado, "SOS");
  assert.equal(convertirMensaje("... ——— ...").tipo, "Morse → texto");
  assert.equal(convertirMensaje("SOS").tipo, "Texto → morse");
});

test("morse: todos los signos de la tabla tienen conversión inversa", () => {
  for (const [signo, codigo] of Object.entries(ALFABETO_MORSE)) {
    assert.equal(morseATexto(codigo), signo);
    assert.equal(textoAMorse(signo), codigo.replace(/-/g, "—"));
  }
  assert.equal(morseATexto(textoAMorse("CH Ñ Ü 0123456789 .,?\"/")), "CH Ñ Ü 0123456789 .,?\"/");
  assert.equal(morseATexto(textoAMorse("Árbol, pingüino y niño")), "ARBOL, PINGÜINO Y NIÑO");
  assert.equal(convertirMensaje("·—  —···").resultado, "A B");
});

test("morse: entradas vacías y símbolos desconocidos", () => {
  for (const entrada of ["", "  ", null]) assert.throws(() => convertirMensaje(entrada));
  assert.throws(() => convertirMensaje("HOLA @"), /Carácter no admitido/);
  assert.throws(() => convertirMensaje("......"), /Código morse desconocido/);
});

test("primos: límites incluidos y el 1 no es primo", () => {
  assert.equal(esPrimo(1), false);
  assert.equal(esPrimo(2), true);
  assert.equal(esPrimo(49), false);
  assert.equal(esPrimo(97), true);
  assert.deepEqual(obtenerPrimos(1), []);
  assert.deepEqual(obtenerPrimos(2), [2]);
  assert.deepEqual(obtenerPrimos(7), [2, 3, 5, 7]);
  assert.deepEqual(obtenerPrimos(10), [2, 3, 5, 7]);
  assert.equal(obtenerPrimos(100000).length, 9592);
});

test("primos: se rechazan vacíos, decimales, negativos y límites excesivos", () => {
  for (const entrada of ["", " ", 0, -3, 2.5, "abc", Infinity, 100001]) {
    assert.throws(() => validarLimite(entrada));
  }
});
