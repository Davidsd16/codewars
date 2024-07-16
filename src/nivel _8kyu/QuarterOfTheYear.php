<?php

function quarterOf($month) {
    // Verifica que el mes esté en el rango válido
    if ($month < 1 || $month > 12) {
        return 'Error: Invalid month';
    }
    // Calcula y devuelve el trimestre
    return ceil($month / 3);
}

// Ejemplos de uso
echo quarterOf(4); // Salida: 2
echo quarterOf(7); // Salida: 3
echo quarterOf(13); // Salida: Error: Invalid month

?>