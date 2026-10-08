const mostrarTabla = (event) => {
  event.preventDefault();
  const campo = document.getElementById('numero');
  const numero = Number(campo.value);

  if (campo.value.trim() !== '' && Number.isInteger(numero) && numero >= 0 && numero <= 10) {
    const tabla = document.getElementById('tabla');
    let tablaDividir = `<h2>Tabla de dividir del n&uacute;mero ${numero}</h2>`;
    tablaDividir += '<ul>';
    // El divisor empieza en 1 para evitar la division entre cero.
    for (let i = 1; i <= 10; i++) {
      tablaDividir += `<li>${numero} / ${i} = ${numero / i}</li>`;
    }
    tablaDividir += '</ul>';
    tabla.innerHTML = tablaDividir;
  } else {
    alert('El n\u00famero introducido debe estar entre 0 y 10 (ambos inclusive) y ser entero.');
    campo.value = '';
    document.getElementById('tabla').textContent = '';
    campo.focus();
  }
};
