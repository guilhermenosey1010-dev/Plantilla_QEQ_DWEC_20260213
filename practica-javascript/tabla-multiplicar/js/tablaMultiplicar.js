const mostrarTabla = (event) => {
  event.preventDefault();
  const campo = document.getElementById('numero');
  const numero = Number(campo.value);

  if (campo.value.trim() !== '' && Number.isInteger(numero) && numero >= 0 && numero <= 10) {
    const tabla = document.getElementById('tabla');
    let tablaMultiplicar = `<h2>Tabla de multiplicar del n&uacute;mero ${numero}</h2>`;
    tablaMultiplicar += '<ul>';
    for (let i = 0; i <= 10; i++) {
      tablaMultiplicar += `<li>${numero} * ${i} = ${numero * i}</li>`;
    }
    tablaMultiplicar += '</ul>';
    tabla.innerHTML = tablaMultiplicar;
  } else {
    alert('El n\u00famero introducido debe estar entre 0 y 10 (ambos inclusive) y ser entero.');
    campo.value = '';
    document.getElementById('tabla').textContent = '';
    campo.focus();
  }
};
