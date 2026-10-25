# Guion para explicar la práctica

Duración orientativa: dos minutos. El vídeo de demostración adjunto tiene subtítulos y no tiene voz. Puedes usar este guion para grabar una versión narrada por ti.

## Presentación

Esta es la práctica 3 de objetos predefinidos en JavaScript. Desde el índice se pueden abrir los seis apartados. Los primeros ejercicios leen un atributo y cambian el color de los enlaces externos. En freeCodeCamp están completados Depuración, con 12 retos, y algoritmos básicos, con 16 retos.

## Código morse

Abro morse.html y pulso Introducir mensaje. Los datos se recogen con window.prompt, como pide el ejercicio. Escribo HOLA MUNDO y el programa muestra el código morse en el body. Hay un espacio entre letras y dos entre palabras.

Después introduzco los puntos y rayas de SOS. El programa detecta automáticamente que es morse y muestra SOS. No hay que elegir un modo.

En js/morse.js hay un objeto con la relación entre cada letra y su código. Incluye Ñ, CH, Ü, números y los signos de la tabla de referencia. Creo el objeto inverso para poder descodificar. La expresión regular distingue el morse del texto. Los resultados se escriben con textContent y los espacios se conservan con white-space: pre-wrap.

Si dejo el mensaje vacío o escribo un símbolo no admitido, se muestra un aviso. Si cancelo el prompt, puedo volver a intentarlo.

## Números primos

Abro primos.html. El dato se recoge desde un input. Introduzco 7 y pulso Calcular primos. La tabla muestra 1, 2, 3, 5 y 7, igual que el ejemplo del PDF.

El 1 aparece como referencia porque el enunciado lo incluye, pero no es primo. Por eso el contador indica cuatro números primos.

En js/primos.js, validarLimite comprueba que el dato es un entero positivo dentro del rango. esPrimo descarta números menores que 2 y busca divisores hasta la raíz cuadrada. obtenerPrimos recorre los candidatos hasta el límite incluido. La tabla se construye con createElement.

Pruebo 1: hay cero primos. Pruebo un número decimal o negativo: aparece un mensaje y no se mantiene una tabla antigua.

## Cierre

El código y las pruebas están en la carpeta practica3 de la rama PRACTICA-3 de GitHub. La memoria incluye las capturas. Para la entrega final hay que publicar el vídeo en YouTube con visibilidad Oculto y añadir su enlace real a la memoria.
