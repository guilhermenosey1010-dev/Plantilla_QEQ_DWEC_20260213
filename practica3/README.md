# Práctica 3: Objetos predefinidos en JavaScript

## Abrir la práctica

Abre `index.html` con un navegador. No necesita instalar dependencias ni utilizar una base de datos. También se puede servir con Apache o cualquier servidor estático.

## Actividades

1. `atributo.html`: lee `data-widget-name` mediante `getAttribute()` y muestra `menu`.
2. `enlaces.html`: selecciona los enlaces cuyo `href` contiene `://` y les asigna el color naranja con JavaScript.
3. `enlace-clase.html`: añade la clase `externo`, cuyo estilo CSS aplica el color naranja.
4. `freecodecamp.html`: resumen de los bloques completados en la plataforma: **Depuración 12/12** y **Scripting básico de algoritmos 16/16**. Las 28 soluciones verificadas están en `freecodecamp/`.
5. `morse.html` y `js/morse.js`: conversor automático de texto a morse y viceversa. Recoge la entrada con `window.prompt()` y muestra el resultado en el body.
6. `primos.html` y `js/primos.js`: recoge un entero mediante un input y muestra los primos hasta el límite incluido en una tabla.

Los tres primeros ejercicios mantienen el código original, con una hoja de estilo común y un enlace para volver al inicio.

## Código morse

- Usa el alfabeto de [la tabla indicada en el enunciado](https://es.wikipedia.org/wiki/C%C3%B3digo_morse#Alfabeto_morse): A-Z, Ñ, CH, Ü, dígitos y los signos punto, coma, interrogación, comillas dobles y barra.
- Separa letras con **un espacio** y palabras con **dos espacios**. El resultado conserva los espacios en la página.
- La salida usa punto `.` y raya `—`. La entrada también admite guiones `-`, rayas `–` y puntos medios `·`.
- Convierte las vocales con tilde a su vocal sin tilde; conserva Ñ y Ü. CH se procesa como un signo propio.
- Detecta morse cuando la entrada solo contiene puntos, rayas y espacios. Por eso un punto aislado se interpreta como la letra E.
- Los caracteres y códigos desconocidos producen un aviso; no se descartan silenciosamente.
- Cancelar el prompt o dejarlo vacío no bloquea el programa.
- En navegadores integrados que no implementan `prompt()`, se ofrece un diálogo HTML de respaldo. Los navegadores habituales utilizan `window.prompt()`.

Ejemplos para probar:

```text
HOLA MUNDO
.... ——— .—.. .—  —— ..— —. —.. ———

... --- ...
SOS

CH Ñ Ü 123
————  ——.——  ..——  .———— ..——— ...——
```

## Números primos y el 1

El ejemplo del enunciado incluye el 1. Matemáticamente **el 1 no es primo**: el cálculo devuelve solo los primos y la tabla añade el 1 como referencia, con un color distinto y una aclaración.

Con entrada `7`, la tabla contiene `1 | 2 | 3 | 5 | 7` y cuenta **4 primos**. Con entrada `1`, muestra solo la referencia y cuenta **0 primos**.

Se aceptan enteros entre 1 y 100000 para mantener una tabla manejable. Se rechazan campos vacíos, negativos, decimales y valores fuera del rango.

## Entrega

- `entrega/memoria.docx`: memoria editable en Word con explicaciones, capturas y un apartado para añadir el enlace del vídeo oculto de YouTube.
- `entrega/memoria.pdf`: memoria con explicaciones y capturas reales del navegador.
- `entrega/memoria.html`: versión editable en texto y visible en el navegador.
- `entrega/capturas/`: capturas de las actividades, conversiones y progreso de freeCodeCamp.
- `entrega/demostracion.mp4`: vídeo explicativo con capturas reales y subtítulos. No incluye narración de voz.
- `entrega/guion-video.md`: explicación por pasos para grabar una versión con tu voz si lo prefieres.
- `entrega/video-youtube.txt`: estado del enlace de YouTube. La publicación como vídeo oculto está pendiente; no se ha inventado ningún enlace.

El documento todavía debe incorporar la URL real del vídeo después de publicarlo en YouTube como **oculto**, tal como solicita el enunciado.

Código: [rama PRACTICA-3 en GitHub](https://github.com/guilhermenosey1010-dev/Plantilla_QEQ_DWEC_20260213/tree/PRACTICA-3/practica3).

## Comprobaciones

Las pruebas de los algoritmos se ejecutan con Node.js:

```text
node --test practica3/tests/algoritmos.test.js
```

Comprueban ambos sentidos del conversor, todos los signos de su tabla, espacios entre palabras, errores de entrada, primos en los extremos y la exclusión del 1 del cálculo matemático. Los retos de freeCodeCamp también han superado sus pruebas en la plataforma.
