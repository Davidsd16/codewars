<?php

function draw_stairs($n) {
    $result = '';
    for ($i = 0; $i < $n; $i++) {
        // Agregar el carácter 'I' y los espacios
        $result .= str_repeat('&nbsp;', $i) . 'I' . '<br>';
    }
    return $result;
}

// Llamar a la función y mostrar el resultado
echo draw_stairs(7);
?>
