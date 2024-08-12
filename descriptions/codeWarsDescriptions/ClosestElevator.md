DESCRIPCIÓN:

Dados 2 ascensores (llamados "izquierdo" y "derecho") en un edificio de 3 pisos (numerados 0 de 1 al 2), escriba una función elevator que acepte 3 argumentos (en orden):

left- El piso actual del ascensor izquierdo.
right- El piso actual del ascensor derecho.
call- El piso que llamó al ascensor.

Debe devolver el nombre del ascensor más cercano al piso llamado ( "left"/ "right").

En el caso en que ambos ascensores estén igualmente distantes del piso llamado, elija el ascensor de la derecha.

Puede asumir que las entradas siempre serán números enteros válidos entre 0 y 2.

Ejemplos:

elevator(0, 1, 0); // => "left"
elevator(0, 1, 1); // => "right"
elevator(0, 1, 2); // => "right"
elevator(0, 0, 0); // => "right"
elevator(0, 2, 1); // => "right"